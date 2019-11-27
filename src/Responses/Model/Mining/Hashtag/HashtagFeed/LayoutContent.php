<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class LayoutContent
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 *
 * // They got same structure.
 * @method FillItem[] getFillItems()
 * @method FillItem[] getMedias()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class LayoutContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'fill_items' => 'FillItem[]',
        'medias' => 'FillItem[]',
    ];
}