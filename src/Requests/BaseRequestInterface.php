<?php

namespace AccountsClient\Requests;

use AccountsClient\Exceptions\AccountsException;

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