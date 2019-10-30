<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed\Item;

/**
 * Class UserFeedResponse
 * @package AccountsClient\Responses
 *
 * @method string getNextMaxId()
 * @method bool isMoreAvailable()
 * @method int getNumResults()
 * @method Item[] getItems()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class UserFeedResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'next_max_id' => 'string',
        'more_available' => 'bool',
        'num_results' => 'int',
        'items' => 'Model\Mining\Timeline\UserFeed\Item[]'
    ];
}