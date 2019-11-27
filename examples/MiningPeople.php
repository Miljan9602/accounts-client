<?php

set_time_limit(0);
date_default_timezone_set('UTC');
require_once ('../vendor/autoload.php');
require_once ('../src/Requests/Miners/PeopleRequests.php');

$client = (new \Miljan9602\AccountsClient\Client())
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
}catch (\Miljan9602\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

/*
$pks = [];
try{
    $rankToken = generateUUID();

    $counter = 0;
    $hasMore = true;

    $next_max_id = 50;
    do {

        $result = $client->getPeople()->getFollowings("1427557192", "420d7462-b4bb-4d7d-b627-12116fc6f589", $next_max_id);

        $followings = $result->getFollowings();

        foreach ($followings as $following) {

            if (!in_array($following->getPk(), $pks)) {
                array_push($pks, $following->getPk());
            }

        }

        $counter++;

        if ($counter > 10) {
            $hasMore = false;
        }

        $next_max_id = $result->getNextMaxId();

        //print_r($result->getFollowings());

    }while($hasMore);
}catch (\Miljan9602\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
print_r($pks);
*/

/*
try{
    $next_max_id = null;
    $hasMore = true;
    do {
        $result = $client->getPeople()->getUserFeed("2128436070", $next_max_id);

        if ($result instanceof \Miljan9602\AccountsClient\Responses\UserFeedResponse) {}

        $next_max_id = $result->getNextMaxId();
        $hasMore = $result->isMoreAvailable();

        $posts = $result->getItems();

        foreach ($posts as $post) {
            $candidates = $post->getImageVersions2()->getCandidates();

            foreach ($candidates as $candidate) {
                echo $candidate->getUrl().PHP_EOL;
                print_r($candidate->getEstimatedScansSizes());
            }
        }

        //print_r($result->getItems());

    }while($hasMore);
}catch (\Miljan9602\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

/*
try{
    $result = $client->getHashtags()->search("Bel");

    echo $result->getRankToken() ? $result->getRankToken() : "NEMA";

    $result = $client->getHashtags()->search("New", $result->getRankToken());
}catch (\AccountsClient\Exceptions\AccountsException $e) {
    echo get_class($e).PHP_EOL;
    echo $e->getMessage().PHP_EOL;
}*/

/*
try{
    $uuid = generateUUID();


    $maxId = null;
    $nextMediaIds = [];

    $persons = [];

    do{

        $result = $client->getHashtags()->feed("belgrade", $uuid, $maxId, $nextMediaIds);

        $maxId = $result->getNextMaxId();
        $nextMediaIds = $result->getNextMediaIds();

        $sections = $result->getSections();

        foreach ($sections as $section) {

            $items = $section->getLayoutContent()->getFillItems();

            if ($items == null) {
                $items = $section->getLayoutContent()->getMedias();
            }

            if ($items == null || empty($items)) { continue; }

            foreach ($items as $item) {

                $user = $item->getMedia()->getUser();

                if (!in_array($user->getUsername(), $persons)) array_push($persons, $user->getUsername());
            }
        }

    }while($result->isMoreAvailable());

}catch (\Miljan9602\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

/*
try{
    $related = $client->getHashtags()->related("belgrade");

    echo sizeof($related->getRelated());
}catch (\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

/*
try{
    $location = $client->getLocations()->search('1', '1', 'belgr');
}catch (\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/


/*
try{
    $uuid = generateUUID();
    $result = $client->getLocations()->feed("109920975697736", $uuid);
    $result = $client->getLocations()->feed("109920975697736", $uuid, "ranked", $result->getNextPage(), $result->getNextMaxId(), $result->getNextMediaIds());

    print_r($result->asArray());

}catch (\Miljan9602\AccountsClient\Exceptions\AccountsException $e) {
    echo $e->getMessage();
}
*/

/*
 * Post comments
$uuid = generateUUID();
$next_max_id = null;
do {
    $mediaId = "1844939649961939969_50417061";
    $result = $client->getPost()->getPostCommenters($mediaId, $next_max_id);

    $commenters = $result->getComments();

    echo "Comments in batch: ".$result->getCommentCount().PHP_EOL;

    foreach ($commenters as $comment) {
        echo $comment->getUser()->getPk().PHP_EOL;
    }

    $next_max_id = $result->getNextMaxId();

    echo $next_max_id;

}while(true);
*/

/*
$mediaId = "1844939649961939969_50417061";
$result = $client->getPost()->getPostLikers($mediaId);

$likers = $result->getUsers();
echo "Total number of likers: ".$result->getUserCount().PHP_EOL;
echo "Batch number of oikers: ".sizeof($likers).PHP_EOL;
foreach ($likers as $liker) {
    echo $liker->getPk().PHP_EOL;
}
*/

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