<?php

namespace App\Structural\Facade\twitter;

class OAuth
{
    public function requestToken(string $appKey, string $appSecret): string
    {
        echo("Get a request token </br>");
        return "requestToken";
    }

    public function getAccessToken(string $requestToken): string
    {
        echo("Get an access token </br>");
        return "accessToken";
    }
}