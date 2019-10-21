<?php

namespace AccountsClient\Exceptions;

/**
 * Class AccountsException
 * @package AccountsClient\Exceptions
 *
 * The core exception that ALL other library exceptions derive from.
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class AccountsException extends \RuntimeException
{
    /**
     * The full response that triggered the exception, if available.
     *
     * @var string|null
     */
    private $response = null;

    /**
     * Check whether the exception has a full server response.
     *
     * @return bool TRUE if a full response is available, otherwise FALSE.
     */
    public function hasResponse()
    {
        return $this->response !== null ? true : false;
    }

    /**
     * @return string|null
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param $rawResponse
     * @return $this
     */
    public function response($rawResponse)
    {
        $this->response = $rawResponse;
        return $this;
    }
}