<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Section
 *
 * @method string getFeedType()
 * @method string getLayoutType()
 * @method ExploreItemInfo getExploreItemInfo()
 * @method LayoutContent getLayoutContent()
 *
 * @package AccountsClient\Responses\Model\Mining\Location\Feed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Section extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'feed_type' => 'string',
        'layout_type' => 'string',
        'explore_item_info' => 'ExploreItemInfo',
        'layout_content' => 'LayoutContent'
    ];
}