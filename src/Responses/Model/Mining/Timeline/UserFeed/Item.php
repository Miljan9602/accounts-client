<?php


namespace AccountsClient\Responses\Model\Mining\Timeline\UserFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Item
 *
 * @method string getPk()
 * @method string getId()
 * @method string getDeviceTimestamp()
 * @method string getTakenAt()
 * @method int getMediaType()
 * @method string getCode()
 * @method int getOriginalWidth()
 * @method int getOriginalHeight()
 * @method User getUser()
 *
 * @package AccountsClient\Responses\Model\Mining\Timeline\UserFeed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Item extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'pk' => 'string',
        'id' => 'string',
        'device_timestamp' => 'string',
        'taken_at' => 'string',
        'media_type' => 'int',
        'code' => 'string',
        'original_width' => 'int',
        'original_height' => 'int',
        'user' => 'User'
    ];
}