<?php

namespace Miljan9602\AccountsClient\Requests\Miners;

use Miljan9602\AccountsClient\Requests\BaseRequest;
use Miljan9602\AccountsClient\Responses\LocationFeedResponse;
use Miljan9602\AccountsClient\Responses\SearchLocationResponse;

class LocationRequests extends BaseRequest
{
    /**
     * @param $latitude
     * @param $longitude
     * @param $query
     * @return \Miljan9602\AccountsClient\Responses\SearchLocationResponse
     */
    public function search($latitude, $longitude, $query)
    {
        return $this->request("/api/v1/accounts/requests/location_search")
            ->addParam('longitude', $longitude)
            ->addParam('latitude', $latitude)
            ->addParam('query', $query)
            ->getResponse(new SearchLocationResponse());
    }

    /**
     * @param $locationId
     * @param $rank_token
     * @param string $tab
     * @param null $nextPage
     * @param null $maxId
     * @param array $next_media_ids
     * @return \Miljan9602\AccountsClient\Responses\LocationFeedResponse
     */
    public function feed($locationId, $rank_token, $tab = "ranked", $nextPage = null, $maxId = null, $next_media_ids = [])
    {
        $request = $this->request("/api/v1/accounts/requests/locations/$locationId/sections")
            ->addParam('rank_token', $rank_token)
            ->addParam('tab', $tab);


        if (!empty($next_media_ids)) {
            $request = $request->addParam('variables', urlencode(json_encode($next_media_ids)));
        }

        if ($nextPage) {
            $request = $request->addParam('next_page', $nextPage);
        }

        if ($maxId) {
            $request = $request->addParam('max_id', $maxId);
        }

        return $request->getResponse(new LocationFeedResponse());
    }
}