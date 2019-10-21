<?php


namespace AccountsClient\Responses\Model\Mining\Followers;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class User
 *
 * @method string getPk()
 * @method string getUsername()
 * @method string getFullName()
 * @method bool IsIsPrivate()
 * @method string getProfilePicUrl()
 * @method string getProfilePicId()
 * @method bool isIsVerified()
 * @method bool isHasAnonymousProfilePicture()
 * @method int getMediaCount()
 *
 * @package AccountsClient\Responses\Model\Mining\Followers
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
        'profile_pic_id' => 'string',
        'is_verified' => 'bool',
        'has_anonymous_profile_picture' => 'bool',
        'media_count' => 'int',
    ];
}