<?php

namespace Miljan9602\AccountsClient\Miners\Requests;

use Miljan9602\AccountsClient\Requests\BaseRequest;
use Miljan9602\AccountsClient\Responses\FollowersResponse;
use Miljan9602\AccountsClient\Responses\FollowingsResponse;
use Miljan9602\AccountsClient\Responses\UserFeedResponse;
use Miljan9602\AccountsClient\Responses\UserInfoResponse;

class PeopleRequests extends BaseRequest
{
    /**
     * @param $pk
     * @param $rankToken
     * @param null $nextQuery
     * @return \AccountsClient\Responses\FollowersResponse
     */
    public function getFollowers($pk, $rankToken, $nextQuery = null) {

        return $this->request("/api/v1/accounts/requests/friendships/$pk/followers")
            ->addParam('rank_token', $rankToken)
            ->addParam('max_id', $nextQuery)
            ->getResponse(new FollowersResponse());
    }

    /**
     * @param $pk
     * @param $rankToken
     * @param null $nextQuery
     * @return \Miljan9602\AccountsClient\Responses\FollowingsResponse
     */
    public function getFollowings($pk, $rankToken, $nextQuery = null) {
        return $this->request("/api/v1/accounts/requests/friendships/$pk/following")
            ->addParam('rank_token', $rankToken)
            ->addParam('max_id', $nextQuery)
            ->getResponse(new FollowingsResponse());
    }

    /**
     * @param string $pk
     * @return \AccountsClient\Responses\UserInfoResponse
     */
    public function getInfo(string $pk) {
        return $this->request("/api/v1/accounts/requests/users/$pk/info")
            ->getResponse(new UserInfoResponse());
    }

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