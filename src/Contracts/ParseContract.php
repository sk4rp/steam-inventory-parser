<?php

namespace App\Contracts;

use App\Enums\AppId;

interface ParseContract
{
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): object|array;
}
