<?php

namespace Miljan9602\AccountsClient\Requests\Miners;

use Miljan9602\AccountsClient\Requests\BaseRequest;
use Miljan9602\AccountsClient\Responses\PostCommentsResponse;
use Miljan9602\AccountsClient\Responses\PostLikersResponse;

class PostRequests extends BaseRequest
{

    /**
     * @param $mediaId
     * @param null $next_max_id
     * @return \Miljan9602\AccountsClient\Responses\PostCommentsResponse
     */
    public function getPostCommenters($mediaId, $next_max_id = null) {

        $request = $this->request("/api/v1/accounts/requests/media/$mediaId/comments");

        if ($mediaId) {
            $request = $request->addParam('next_max_id', $next_max_id);
        }

        return $request->getResponse(new PostCommentsResponse());

    }

    /**
     * @param $mediaId
     * @return \Miljan9602\AccountsClient\Responses\PostLikersResponse
     */
    public function getPostLikers($mediaId){
        return $this->request("/api/v1/accounts/requests/media/$mediaId/likers")
            ->getResponse(new PostLikersResponse());
    }
}