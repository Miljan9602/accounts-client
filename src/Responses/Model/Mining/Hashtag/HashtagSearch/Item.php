<?php

namespace Miljan9602\AccountsClient\Responses\Model\Mining\Hashtag\HashtagSearch;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class Item
 * @package AccountsClient\Responses\Model\Mining\Hashtag\HashtagSearch
 *
 * @method int getFormattedMediaCount()
 * @method string getId()
 * @method int getMediaCount()
 * @method string getName()
 * @method string getProfilePicUrl()
 * @method string getSearchResultSubtitle()
 *
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class Item extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'formatted_media_count' => 'int',
        'id' => 'string',
        'media_count' => 'int',
        'name' => 'string',
        'profile_pic_url' => 'string',
        'search_result_subtitle' => 'string',
    ];
}