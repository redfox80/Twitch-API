<?php

/**
 * This is just for testing, please ignore if i'm stupid enough to push it to git...
 * 
 * - regards redfox80
 */

//Require autoloader
require_once(__DIR__ . "/../vendor/autoload.php");

//LOAD ENV
$dotenv = new Dotenv\Dotenv(__DIR__ . "/..");
$dotenv->load();



//
// ─── INTERESTING STUFFZ START HERE ──────────────────────────────────────────────
//

use redfox80\twitch\twitchapi as twitch;

echo twitch::test();

echo "<br/><br/>";

var_dump(getenv('testvar'));