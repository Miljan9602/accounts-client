<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class User
 * @package AccountsClient\Responses\Model\Mining\Timeline\UserFeed
 *
 * @method string getPk()
 * @method string getUsername()
 * @method string getFullName()
 * @method bool IsIsPrivate()
 * @method string getProfilePicUrl()
 * @method bool isIsVerified()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class User extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'pk' => 'string',
        'username' => 'string',
        'full_name' => 'string',
        'is_private' => 'bool',
        'profile_pic_url' => 'string',
        'is_verified' => 'bool',
    ];
}