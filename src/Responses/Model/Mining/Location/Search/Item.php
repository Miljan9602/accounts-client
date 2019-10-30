<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Search;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Item
 *
 * @method string getAddress()
 * @method string getExternalId()
 * @method string getExternalIdSource()
 * @method string getLat()
 * @method string getLot()
 * @method int getMinimumAge()
 * @method string getName()
 *
 * @package AccountsClient\Responses\Model\Mining\Location\Search
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Item extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'address' => 'string',
        'external_id' => 'string',
        'external_id_source' => 'string',
        'lat' => 'string',
        'lot' => 'string',
        'minimum_age' => 'int',
        'name' => 'string',
    ];
}