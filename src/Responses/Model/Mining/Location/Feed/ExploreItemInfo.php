<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class ExploreItemInfo
 *
 * @method int getAspectRatio()
 * @method bool isAutoplay()
 * @method int getNumColumns()
 * @method int getTotalNumColumns()
 *
 * @package AccountsClient\Responses\Model\Mining\Location\Feed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ExploreItemInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'aspect_ratio' => 'int',
        'autoplay' => 'bool',
        'num_columns' => 'int',
        'total_num_columns' => 'int',
    ];
}