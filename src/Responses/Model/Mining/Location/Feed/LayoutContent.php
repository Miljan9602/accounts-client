<?php


namespace Miljan9602\AccountsClient\Responses\Model\Mining\Location\Feed;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Class LayoutContent
 *
 * @method Medias[] getMedias()
 *
 * @package AccountsClient\Responses\Model\Mining\Location\Feed
 * @author Rakita Miljan <miljan@flocksocial.io>
 */
class LayoutContent extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'medias' => 'Medias[]',
    ];
}