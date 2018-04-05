<?php

namespace Redfox80\Twitch;

class Request {

    private $apiBase = "https://api.twitch.tv/helix/";

    protected function send($query)
    {
        $query = $this->apiBase . $query;

        $client = new \GuzzleHttp\Client();

        $res = $client->request('GET', $query, [
            'headers' => [
                'Client-ID' => $_ENV['API_TWITCH_ID'],
            ],
        ]);

        var_dump($res->getBody());

        return json_decode($res->getBody());
    }
}