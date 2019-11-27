<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class FillItem
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 *
 * @method Media getMedia()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class FillItem extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'media' => 'Media',
    ];
}