<?php


namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Location\Search\Item;

/**
 * Class SearchLocationResponse
 *
 * @method Item[] getVenues()
 *
 * @package AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchLocationResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'request_id' => 'string',
        'venues' => 'Model\Mining\Location\Search\Item[]',
    ];
}