<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Item
 *
 * @method string getTakenAt()
 * @method string getPk()
 * @method int getNumResults()
 * @method string getId()
 * @method string getCode()
 * @method string getLat()
 * @method string getLot()
 * @method string getNextMaxId()
 * @method int getLikeCount()
 * @method int getCommentCount()
 * @method User getUser()
 *
 * @package AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Item extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'taken_at' => 'string',
        'pk' => 'string',
        'num_results' => 'int',
        'id' => 'string',
        'code' => 'string',
        'lat' => 'string',
        'lot' => 'string',
        'next_max_id' => 'string',
        'like_count' => 'int',
        'comment_count' => 'int',
        'user' => 'User',
    ];
}