<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\Related;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Item
 *
 * @method string getId()
 * @method string getName()
 * @method string getType()
 *
 * @package AccountsClient\Responses\Model\Mining\Hashtag\Related
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Item extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string'
    ];
}