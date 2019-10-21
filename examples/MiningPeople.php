<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');
require_once ('../src/Requests/Miners/PeopleRequests.php');

$client = (new \AccountsClient\Client())
    ->setProxy("http://127.0.0.1:8030")
    ->setVerifySsl(false)
    ->setRetry(429, 5)
    ->setRetry(502, 10)
    ->setRetry(400, 5);

/*
$result = $client->getPeople()->getInfo("203026751");
*/

/*
try{
    $rankToken = generateUUID();
    $next_max_id = null;
    do {

        $result = $client->getPeople()->getFollowers("2128436070", $rankToken, $next_max_id);

        $next_max_id = $result->getNextMaxId();
        print_r($result->getFollowers());

    }while(true);
}catch (\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

try{
    $next_max_id = null;
    $hasMore = true;
    do {
        $result = $client->getTimeline()->getUserFeed("2128436070", $next_max_id);

        $next_max_id = $result->getNextMaxId();
        $hasMore = $result->isMoreAvailable();

        print_r($result->getItems());

    }while($hasMore);
}catch (\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}



function generateUUID(
    $keepDashes = true)
{
    $uuid = sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );

    return $keepDashes ? $uuid : str_replace('-', '', $uuid);
}