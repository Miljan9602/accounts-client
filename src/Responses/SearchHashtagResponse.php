<?php

namespace Miljan9602\AccountsClient\Responses;

use Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagSearch\Item;

/**
 * Class SearchHashtagResponse
 * @package AccountsClient\Responses
 *
 * @method bool isHasMore()
 * @method string getRankToken()
 * @method Item[] getResults()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class SearchHashtagResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'has_more' => 'bool',
        'rank_token' => 'string',
        'results' => 'Model\Mining\Hashtag\HashtagSearch\Item[]'
    ];
}