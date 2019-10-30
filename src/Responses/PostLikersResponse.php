<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Post\Likers\User;

/**
 * Class PostLikersResponse
 *
 * @method int getUserCount()
 * @method User[] getUsers()
 *
 * @package Miljan9602\AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostLikersResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'user_count' => 'int',
        'users' => 'Model\Mining\Post\Likers\User[]',
    ];
}