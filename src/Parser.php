<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Enums\AppId;
use App\Services\ParseInventory;

// SteamID64
$result1 = ParseInventory::getInventory(76561198047593268, AppId::CS2, 2);

// SteamID2
$result2 = ParseInventory::getInventory('STEAM_0:0:43663770', AppId::CS2, 2);

// SteamID3
$result3 = ParseInventory::getInventory('[U:1:87327540]', AppId::CS2, 2);


// var_dump($result1);
// var_dump($result2);
// var_dump($result3);
