<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Candidate
 *
 * @method int getWidth()
 * @method int getHeight()
 * @method string getUrl()
 * @method int[] getEstimatedScansSizes()
 *
 * @package Miljan9602\AccountsClient\Responses\Model\Mining\Timeline\UserFeed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Candidate extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'width' => 'int',
        'height' => 'int',
        'url' => 'string',
        'estimated_scans_sizes' => 'int[]'
    ];
}