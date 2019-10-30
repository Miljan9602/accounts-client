<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\UserInfo\User;

/**
 * Class UserInfoResponse
 * @package AccountsClient\Responses
 *
 * @method User getUser()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class UserInfoResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'user' => 'Model\Mining\UserInfo\User'
    ];
}