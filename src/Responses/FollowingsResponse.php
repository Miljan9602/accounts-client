<?php


namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Followings\User;

/**
 * Class FollowingsResponse
 *
 * @method int getPageSize()
 * @method string getNextMaxId()
 * @method User[] getFollowings()
 *
 * @package AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class FollowingsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'followings' => 'Model\Mining\Followings\User[]',
        'page_size' => 'int',
        'next_max_id' => 'string'
    ];
}