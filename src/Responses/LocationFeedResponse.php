<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed\Section;

/**
 * Class LocationFeedResponse
 * @package AccountsClient\Responses
 *
 * @method Section[] getSections()
 * @method string[] getNextMediaIds()
 * @method int getNextPage()
 * @method bool isMoreAvailable()
 * @method string getNextMaxId()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class LocationFeedResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'sections' => 'Model\Mining\Location\Feed\Section[]',
        'next_media_ids' => 'string[]',
        'next_page' => 'int',
        'more_available' => 'bool',
        'next_max_id' => 'string'
    ];
}