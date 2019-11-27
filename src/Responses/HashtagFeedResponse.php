<?php


namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed\Item;
use Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed\Section;

/**
 * Class HashtagFeedResponse
 *
 * @method bool isMoreAvailable()
 * @method string getNextMaxId()
 * @method int getNumResults()
 * @method int[] getNextMediaIds()
 * @method Section[] getSections()
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
        'next_media_ids' => 'int[]',
        'sections' => 'Model\Mining\Hashtag\HashtagFeed\Section[]',
    ];
}