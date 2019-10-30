<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Post\Comments\Comment;

/**
 * Class PostCommentsResponse
 * @package Miljan9602\AccountsClient\Responses
 *
 * @method bool isCommentLikesEnabled()
 * @method Comment[] getComments()
 * @method int getCommentCount()
 * @method bool isHasMoreComments()
 * @method string getNextMaxId()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class PostCommentsResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'comment_likes_enabled' => 'bool',
        'comments' => 'Model\Mining\Post\Comments\Comment[]',
        'comment_count' => 'int',
        'has_more_comments' => 'bool',
        'next_max_id' => 'string'
    ];
}