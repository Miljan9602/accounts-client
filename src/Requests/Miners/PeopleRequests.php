<?php

namespace AccountsClient\Miners\Requests;

use AccountsClient\Requests\BaseRequest;
use AccountsClient\Responses\FollowersResponse;
use AccountsClient\Responses\UserInfoResponse;

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

      /*
      public function getFollowings($pk, $rankToken, $nextQuery = null) {
          return $this->request("/api/v1/accounts/requests/friendships/$pk/followings")
              ->addParam('rank_token', $rankToken)
              ->addParam('max_id', $nextQuery)
              ->getResponse(new FollowingsResponse());
      }
      */

    /**
     * @param $pk
     * @return \AccountsClient\Responses\UserInfoResponse
     */
    public function getInfo($pk) {
        return $this->request("/api/v1/accounts/requests/users/$pk/info")
            ->getResponse(new UserInfoResponse());
    }
}