<?php

namespace Miljan9602\AccountsClient\Requests;

use Miljan9602\AccountsClient\Exceptions\AccountsException;

/**
 * Interface BaseRequestInterface
 * @package AccountsClient\Requests
 */
interface BaseRequestInterface
{
    /**
     * @param RequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     * @throws AccountsException
     */
    public function sendRequest(RequestInterface $request);

    /**
     * @param $route
     * @return RequestInterface
     */
    public function request($route);
}