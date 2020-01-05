<?php


namespace Miljan9602\AccountsClient\Requests\Information;


use Miljan9602\AccountsClient\Requests\BaseRequest;
use Miljan9602\AccountsClient\Responses\FriendshipResponse;

class InformationRequests extends BaseRequest
{

    /**
     * Returns friendship response.
     *
     * Checks friendship status between two instagram accounts.
     *
     * @param $pk mixed from instagram account with this pk we want to send request.
     * @param $userId mixed for this instagram account we want to see friendship.
     * @return \Miljan9602\AccountsClient\Responses\FriendshipResponse
     */
    public function friendship($pk, $userId) {
        return $this->request("/api/v1/accounts/$pk/information/friendship/$userId")->getResponse(new FriendshipResponse());
    }
}