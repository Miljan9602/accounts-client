<?php

namespace Miljan9602\AccountsClient;

use Miljan9602\AccountsClient\Miners\Requests\PeopleRequests;
use Miljan9602\AccountsClient\Requests\Information\InformationRequests;
use Miljan9602\AccountsClient\Requests\Miners\HashtagRequests;
use Miljan9602\AccountsClient\Requests\Miners\LocationRequests;
use Miljan9602\AccountsClient\Requests\Miners\PostRequests;

class Client
{
    /**
     * Sets proxy which will be send with every request with this client.
     * @var string
     */
    private $proxy;

    /**
     * This should be set to false when we send request with the proxy.
     * @var bool
     */
    private $verifySSL;

    /**
     * @var array
     */
    private $retry;

    /**
     * @var PeopleRequests
     */
    private $people;

    /**
     * @var HashtagRequests
     */
    private $hashtags;

    /**
     * @var LocationRequests
     */
    private $locations;

    /**
     * @var PostRequests
     */
    private $post;

    /**
     * @var InformationRequests
     */
    private $informationRequests;

    /**
     * Client constructor. Creates new client instance and init default options.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Load deafult options which we need so this class would work.
     */
    private function init()
    {
        $this->people = new PeopleRequests($this);
        $this->hashtags = new HashtagRequests($this);
        $this->locations = new LocationRequests($this);
        $this->post = new PostRequests($this);
        $this->informationRequests = new InformationRequests($this);
        $this->verifySSL = true;
        $this->proxy = null;
        $this->retry = [];
    }

    /**
     * Return proxy which is binded to this client.
     * @return string
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * Sets proxy which will be binded to this client.
     * @param $proxy - proxy which will be used with every request with this client.
     * @return $this instance of this object.
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
        return $this;
    }

    /**
     * Return what is set in verifySsl.
     * @return bool
     */
    public function getVerifySSL()
    {
        return $this->verifySSL;
    }

    /**
     * Tell client if we should verify ssl when sending request. This should be set to false, when using proxy.
     * @param $state true or false.
     * @return $this instance of this object.
     */
    public function setVerifySsl($state = true)
    {
        $this->verifySSL = $state;
        return $this;
    }

    /**
     * @return array
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * @param $statusCode
     * @param $numberOfRetries
     * @return $this
     */
    public function setRetry($statusCode, $numberOfRetries)
    {
        $this->retry[$statusCode] = $numberOfRetries;
        return $this;
    }

    /**
     * @return PeopleRequests
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * @return HashtagRequests
     */
    public function getHashtags()
    {
        return $this->hashtags;
    }

    /**
     * @return LocationRequests
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @return PostRequests
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @return InformationRequests
     */
    public function getInformationRequests()
    {
        return $this->informationRequests;
    }
}