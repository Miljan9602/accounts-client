<?php


namespace Miljan9602\AccountsClient\Responses;


use Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\Related\Item;

/**
 * Class HashtagRelatedResponse
 *
 * @method Item[] getRelated()
 *
 * @package AccountsClient\Responses
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class HashtagRelatedResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'related' => 'Model\Mining\Hashtag\Related\Item[]',
    ];
}