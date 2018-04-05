<?php

namespace Redfox80\Twitch;

require_once(__DIR__ . "/../vendor/autoload.php");

use Redfox80\Twitch\Endpoints;

class Api extends Endpoints {

    public function test()
    {
        return "THIS IS A TEST FUNCTION";
    }

}