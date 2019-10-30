<?php


namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed\Item;

/**
 * Class HashtagFeedResponse
 *
 * @method bool isMoreAvailable()
 * @method string getNextMaxId()
 * @method int getNumResults()
 * @method Item[] getItems()
 * @method Item[] getRankedItems()
 *
 * @package AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class HashtagFeedResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'more_available' => 'bool',
        'next_max_id' => 'string',
        'num_results' => 'int',
        'items' => 'Model\Mining\Hashtag\HashtagFeed\Item[]',
        'ranked_items' => 'Model\Mining\Hashtag\HashtagFeed\Item[]'
    ];
}