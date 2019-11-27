<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;


use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Media
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 *
 * @method User getUser()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Media extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'user' => 'User',
    ];
}