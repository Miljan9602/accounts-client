<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Media
 * @package AccountsClient\Responses\Model\Mining\Location\Feed
 *
 * @method string getTakenAt()
 * @method string getPk()
 * @method string getId()
 * @method string getDeviceTimestamp()
 * @method int getMediaType()
 * @method string getCode()
 * @method int getOriginalHeight()
 * @method int getOriginalWidth()
 * @method string getLat()
 * @method string getLot()
 * @method bool isCanViewerReshare()
 * @method string getNextMaxId()
 * @method int getLikeCount()
 * @method string getOrganicTrackingToken()
 * @method Location getLocation()
 * @method User getUser()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Media extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'taken_at' => 'string',
        'pk' => 'string',
        'id' => 'string',
        'device_timestamp' => 'string',
        'media_type' => 'int',
        'code' => 'string',
        'original_height' => 'int',
        'original_width' => 'int',
        'lat' => 'string',
        'lot' => 'string',
        'can_viewer_reshare' => 'bool',
        'next_max_id' => 'string',
        'like_count' => 'int',
        'organic_tracking_token' => 'string',
        'location' => 'Location',
        'user' => 'User',
        'explore_item_info' => 'ExploreItemInfo'
    ];
}