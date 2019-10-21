<?php


namespace AccountsClient\Requests\Miners;

use AccountsClient\Requests\BaseRequest;
use AccountsClient\Responses\UserFeedResponse;

class TimelineRequests extends BaseRequest
{
    /**
     * @param $pk
     * @param null $nextQuery
     * @return \AccountsClient\Responses\UserFeedResponse
     */
    public function getUserFeed($pk, $nextQuery = null) {

        return $this->request("/api/v1/accounts/requests/feed/user/$pk")
            ->addParam('max_id', $nextQuery)
            ->getResponse(new UserFeedResponse());
    }
}