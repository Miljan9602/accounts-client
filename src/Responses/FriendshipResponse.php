<?php


namespace Miljan9602\AccountsClient\Responses;

/**
 * Class FriendshipResponse
 * @package Miljan9602\AccountsClient\Responses
 *
 * @method bool isBlocking()
 * @method bool isFollowedBy()
 * @method bool isFollowing()
 * @method bool isIncomingRequest()
 * @method bool isBestie()
 * @method bool isBlockingReel()
 * @method bool isMutingReel()
 * @method bool isPrivate()
 * @method bool isRestricted()
 * @method bool isMuting()
 * @method bool isOutgoingRequest()
 *
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class FriendshipResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'blocking' => 'bool',
        'followed_by' => 'bool',
        'following' => 'bool',
        'incoming_request' => 'bool',
        'is_bestie' => 'bool',
        'is_blocking_reel' => 'bool',
        'is_muting_reel' => 'bool',
        'is_private' => 'bool',
        'is_restricted' => 'bool',
        'muting' => 'bool',
        'outgoing_request' => 'bool',
    ];
}