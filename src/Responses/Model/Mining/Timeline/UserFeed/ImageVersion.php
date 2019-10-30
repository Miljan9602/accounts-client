<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class ImageVersion
 *
 * @method Candidate[] getCandidates()
 *
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class ImageVersion extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'candidates' => 'Candidate[]'
    ];
}