<?php

namespace App\Structural\Facade;

class Facade
{
    public function run(): void
    {
        $twitterService = new TwitterService();
        $recentTweets = $twitterService->getRecentTweets();

    }
}