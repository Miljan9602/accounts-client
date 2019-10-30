<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Post\Comments;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Comment
 *
 * @method string getPk()
 * @method string getUserId()
 * @method string getText()
 * @method int getType()
 * @method string getCreatedAt()
 * @method User getUser()
 *
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Post\Comments
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Comment extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'pk' => 'string',
        'user_id' => 'string',
        'text' => 'string',
        'type' => 'int',
        'created_at' => 'string',
        'user' => 'User'
    ];
}