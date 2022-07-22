<?php

namespace App\Structural\Facade;

use App\Structural\Facade\twitter\OAuth;
use App\Structural\Facade\twitter\TwitterClient;

class TwitterService
{
    public function getRecentTweets(): array
    {
        $oauth = new OAuth();
        $requestToken = $oauth -> requestToken("appKey", "secret");
        $accessToken = $oauth -> getAccessToken($requestToken);

        $twitterClient = new TwitterClient();
        return $twitterClient -> getRecentTweets($accessToken);
    }
}