<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\ParseContract;
use App\DTO\InventoryDescriptionDTO;
use App\DTO\InventoryItemDTO;
use App\DTO\InventoryResponseDTO;
use App\Enums\AppId;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

final readonly class ParseInventory implements ParseContract
{
    private const BASE_INVENTORY_URL = 'https://steamcommunity.com/inventory/';

    /**
     * @param int|string $steamId
     * @param AppId $appId
     * @param int $contextId
     * @return InventoryResponseDTO
     * @throws \JsonException
     */
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): InventoryResponseDTO
    {
        try {
            $response = (new Client())->get(
                sprintf('%s%s/%s/%s', self::BASE_INVENTORY_URL, convertToSteamID64($steamId), $appId->value, $contextId)
            );

            $data = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR) ?? [];

            $items = array_map(
                static fn ($item) => InventoryItemDTO::fromArray($item),
                $data['assets'] ?? []
            );

            $descriptions = array_map(
                static fn ($desc) => InventoryDescriptionDTO::fromArray($desc),
                $data['descriptions'] ?? []
            );
            return new InventoryResponseDTO(true, $items, $descriptions);
        } catch (GuzzleException $e) {
            return new InventoryResponseDto(false, [], [], $e->getMessage());
        }
    }

    /**
     * @param int|string $steamId
     * @param AppId $appId
     * @param string $classId
     * @return list<mixed>
     * @throws \JsonException
     */
    public static function getSomeItemByClassId(int|string $steamId, AppId $appId, string $classId): array
    {
        $inventory = self::getInventory($steamId, $appId, 2);

        if (!$inventory->success) {
            return [];
        }

        return array_filter($inventory->items, static fn (InventoryItemDto $item) => $item->classId === $classId);
    }

    /**
     * @param int|string $steamId
     * @param AppId $appId
     * @param string $classId
     * @return string|null
     * @throws \JsonException
     */
    public static function getInspectLinkForItem(int|string $steamId, AppId $appId, string $classId): ?string
    {
        $inventory = self::getInventory($steamId, $appId, 2);

        if (!$inventory->success) {
            return null;
        }

        foreach ($inventory->descriptions as $description) {
            if ($description->classId === $classId && $description->inspectLink !== null) {
                return $description->inspectLink;
            }
        }

        return null;
    }
}
