<?php

namespace AccountsClient\Requests;

use AccountsClient\Client;
use AccountsClient\Exceptions\AccountsException;
use AccountsClient\Exceptions\BadRequestException;
use AccountsClient\Exceptions\NotFoundException;
use AccountsClient\Exceptions\ThrottleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

/**
 * Class BaseRequest
 * @package AccountsClient\Requests
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
abstract class BaseRequest implements BaseRequestInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * BaseRequest constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->httpClient = new \GuzzleHttp\Client();
    }

    public function sendRequest(RequestInterface $request)
    {

        $url = $request->getFullRoute();

        if (!empty($request->getPayload())) {
            $url .= "?" . http_build_query($request->getPayload());
        }

        try {
            $result = $this->httpClient->get($url, $this->buildOptions($request));

        } catch (RequestException $e) {

            switch ($e->getCode()) {
                case 400:
                    $e = new BadRequestException('Invalid request options.', 400);
                    break;

                case 404:
                    $e = new NotFoundException('Requested resource does not exist.', 404);
                    break;

                case 429:
                    $e = new ThrottleException('You have sent too many requests, please try again later.', 429);
                    break;

                case 500:
                    $e = new AccountsException('Accounts 500 status code error.', 500);
                    break;
                default:
                    $e = $this->throwNonDefaultExceptions($e->getRequest(), $e->getResponse());
            }

            throw $e;
        }

        return $result;
    }

    /**
     * @param RequestInterface $request
     * @return array
     */
    private function buildOptions(RequestInterface $request)
    {

        $options = [
            'headers' => array_merge($this->defaultHeaders(), $request->getHeaders())
        ];

        if ($this->client->getProxy()) {
            $options['proxy'] = $this->client->getProxy();
        }

        // Only check if false, because default is true.
        if (!$this->client->getVerifySSL()) {
            $options['verify'] = false;
        }

        if ($handler = $this->createHandler()) {
            $options['handler'] = $handler;
        }

        return $options;
    }

    /**
     * @return array
     */
    private function defaultHeaders()
    {
        $headers = [];
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'X-Ig-App-Id: 936619743392459';
        $headers[] = 'Accept-Encoding: gzip, deflate, br';
        $headers[] = 'Accept-Language: en-US,en;q=0.9';
        $headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36';
        $headers[] = 'Accept: */*';
        $headers[] = 'Authority: www.instagram.com';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Sec-Fetch-Site: same-origin';

        return $headers;
    }

    /**
     * Creates handler which we will bind into our guzzle handler.
     * @return HandlerStack
     */
    protected function createHandler()
    {

        $handlerStack = HandlerStack::create(new CurlHandler());

        if ($array = $this->client->getRetry()) {
            $handlerStack->push(Middleware::retry($this->retryDecider($array), $this->retryDelay()));
        }

        return $handlerStack;
    }

    /**
     * Decide if we should do the retry.
     * @param $array - of status codes and their counter to see how many retries we need to do.
     * @return \Closure
     */
    protected function retryDecider($array)
    {

        return function ($retries, \GuzzleHttp\Psr7\Request $request, Response $response = null, RequestException $exception = null) use ($array) {

            if (!$response->getStatusCode()) {
                return false;
            }

            // If we did not set to retry for this status code, return false.
            if (!isset($array[$response->getStatusCode()])) {
                return false;
            }

            // Get how many retries we set for this status code, and retry until we reach wanted retry.
            return $array[$response->getStatusCode()] > $retries;
        };

    }

    private function throwNonDefaultExceptions(\Psr\Http\Message\RequestInterface $result, ResponseInterface $response) {

        $rawResponse = $response->getBody()->getContents();

        // try to convert to json.
        $jsonArray = \GuzzleHttp\json_decode($rawResponse, true);

        // If the server response is not an array, it means that JSON decoding
        // failed or some other bad thing happened. So analyze the HTTP status
        // code (if available) to see what really happened.
        if (!is_array($jsonArray)) {
            throw (new AccountsException('Could not parse response.'))->response($rawResponse);
        }

        if ($response->getStatusCode() == 422) {
            $message = isset($jsonArray['message']) ? $jsonArray['message'] : "Invalid request, please check the fields you have sent.";
            throw (new BadRequestException($message, 422))->response($rawResponse);
        }

    }

    /**
     * Calculates the time we need to wait for the next request.
     * @return \Closure
     */
    protected function retryDelay()
    {
        return function ($numberOfRetries) {
            return 1000 * $numberOfRetries;
        };
    }

    public function request($route)
    {
        return new Request($this, $route);
    }

}