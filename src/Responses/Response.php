<?php

namespace Miljan9602\AccountsClient\Responses;

use LazyJsonMapper\LazyJsonMapper;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Response
 * @package AccountsClient\Responses
 *
 * Automatically maps JSON data onto PHP objects with virtual functions.
 * Configures important core settings for the property mapping process.
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Response extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'status' => 'string',
    ];

    /** @var ResponseInterface */
    public $httpResponse;

    /**
     * @param ResponseInterface $response
     * @return $this
     */
    public function httpResponse(ResponseInterface $response)
    {
        $this->httpResponse = $response;
        return $this;
    }
}