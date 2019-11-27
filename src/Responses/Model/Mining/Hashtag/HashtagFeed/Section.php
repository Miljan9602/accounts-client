<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Section
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 *
 * @method LayoutContent getLayoutContent()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Section extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'layout_content' => 'LayoutContent',
    ];
}