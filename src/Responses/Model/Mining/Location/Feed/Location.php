<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Location
 * @package AccountsClient\Responses\Model\Mining\Location\Feed
 *
 * @method string getPk()
 * @method string getName()
 * @method string getAddress()
 * @method string getCity()
 * @method string getShortName()
 * @method string getLng()
 * @method string getLat()
 * @method string getExternalSource()
 * @method string getFacebookPlacesId()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Location extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'pk' => 'string',
        'name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'short_name' => 'string',
        'lng' => 'string',
        'lat' => 'string',
        'external_source' => 'string',
        'facebook_places_id' => 'string'
    ];
}