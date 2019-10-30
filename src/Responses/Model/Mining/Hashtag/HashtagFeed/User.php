<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class User
 *
 * @method string getPk()
 * @method string getUsername()
 * @method string getFullName()
 * @method bool isIsPrivate()
 * @method string getProfilePicId()
 * @method string getProfilePicUrl()
 *
 * @package AccountsClient\Responses\Model\Mining\Hashtag\HashtagFeed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class User extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'pk' => 'string',
        'username' => 'string',
        'full_name' => 'string',
        'is_private' => 'bool',
        'profile_pic_id' => 'string',
        'profile_pic_url' => 'string'
    ];
}