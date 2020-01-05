<?php

namespace Miljan9602\AccountsClient\Requests\Miners;

use Miljan9602\AccountsClient\Requests\BaseRequest;
use Miljan9602\AccountsClient\Responses\HashtagFeedResponse;
use Miljan9602\AccountsClient\Responses\HashtagRelatedResponse;
use Miljan9602\AccountsClient\Responses\SearchHashtagResponse;

class HashtagRequests extends BaseRequest
{

    /**
     * @param $query
     * @return \AccountsClient\Responses\SearchHashtagResponse
     */
    public function search($query, $rankToken = null, $count = 30)
    {
       return $this->request("/api/v1/accounts/requests/tags/search")
            ->addParam('query', $query)
            ->addParam('rank_token', $rankToken)
            ->addParam('count', $count)->getResponse(new SearchHashtagResponse());
    }

    /**
     * @param $hashtag
     * @param $rankToken
     * @param null $maxId
     * @return \AccountsClient\Responses\HashtagFeedResponse
     */
    public function feed($hashtag, $rankToken, $maxId = null, $next_media_ids = [])
    {

        $request = $this->request("/api/v1/accounts/requests/feed/tag/$hashtag")
            ->addParam('rank_token', $rankToken);

        if ($maxId) {
            $request = $request->addParam('max_id', $maxId);
        }

        if ($next_media_ids != null && !empty($next_media_ids)) {

            $ids = [];

            foreach ($next_media_ids as $id) {
                array_push($ids, intval($id));
            }

            $request = $request->addParam('variables', urlencode(json_encode([
                'next_media_ids' => $ids
            ])));
        }

        return $request->getResponse(new HashtagFeedResponse());
    }

    /**
     * @param $hashtag
     * @return \AccountsClient\Responses\HashtagRelatedResponse
     */
    public function related($hashtag)
    {
        return $this->request("/api/v1/accounts/requests/tags/$hashtag/related")->getResponse(new HashtagRelatedResponse());
    }
}