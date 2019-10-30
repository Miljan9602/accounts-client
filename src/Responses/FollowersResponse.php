<?php


namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Followers\User;

/**
 * Class FollowersResponse
 *
 * @method int getPageSize()
 * @method string getNextMaxId()
 * @method User[] getFollowers()
 *
 * @package AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class FollowersResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'followers' => 'Model\Mining\Followers\User[]',
        'page_size' => 'int',
        'next_max_id' => 'string'
    ];
}