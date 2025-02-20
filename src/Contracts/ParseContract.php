<?php

namespace App\Contracts;

use App\Enums\AppId;

interface ParseContract
{
    /**
     * @return object|array<string, mixed>
     */
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): object|array;
}
