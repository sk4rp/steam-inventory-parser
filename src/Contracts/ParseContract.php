<?php

namespace App\Contracts;

use App\DTO\InventoryResponseDTO;
use App\Enums\AppId;

interface ParseContract
{
    /**
     * @return InventoryResponseDTO
     */
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): InventoryResponseDTO;

    /**
     * @return array<string, mixed>
     */
    public static function getSomeItemByClassId(int|string $steamId, AppId $appId, string $classId): array;

    /**
     * @return string|null
     */
    public static function getInspectLinkForItem(int|string $steamId, AppId $appId, string $classId): ?string;
}
