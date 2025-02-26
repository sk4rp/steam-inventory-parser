<?php

use App\DTO\InventoryDescriptionDTO;
use App\DTO\InventoryItemDTO;
use App\DTO\InventoryTagsDTO;

if (!function_exists('convertToSteamID64')) {
    function convertToSteamID64(int|string $steamId): int
    {
        // SteamID64
        if (is_numeric($steamId) && (int)$steamId >= 76561197960265728) {
            return (int)$steamId;
        }

        // SteamID2 (STEAM_X:Y:Z)
        if (preg_match('/^STEAM_[0-5]:([0-1]):(\d+)$/', $steamId, $matches)) {
            return (int)($matches[2] * 2 + 76561197960265728 + $matches[1]);
        }

        // SteamID3 ([U:1:Z])
        if (preg_match('/^\[U:1:(\d+)]$/', $steamId, $matches)) {
            return (int)($matches[1] + 76561197960265728);
        }

        throw new \InvalidArgumentException("Invalid SteamID format: $steamId");
    }
}

if (!function_exists('parseItems')) {
    /**
     * @param array<mixed> $data
     * @return InventoryItemDTO[]
     */
    function parseItems(array $data): array
    {
        return array_map(
            static fn ($item) => InventoryItemDTO::fromArray($item),
            $data['assets'] ?? []
        );
    }
}

if (!function_exists('parseDescriptions')) {
    /**
     * @param array<mixed> $data
     * @return InventoryDescriptionDTO[]
     */
    function parseDescriptions(array $data): array
    {
        return array_map(
            static fn ($desc) => InventoryDescriptionDTO::fromArray($desc),
            $data['descriptions'] ?? []
        );
    }
}

if (!function_exists('parseTags')) {
    /**
     * @param array<mixed> $data
     * @return InventoryTagsDTO[]
     */
    function parseTags(array $data): array
    {
        $tags = [];
        foreach ($data['descriptions'] as $description) {
            if (isset($description['tags'])) {
                foreach ($description['tags'] as $tag) {
                    $tags[] = InventoryTagsDTO::fromArray($tag);
                }
            }
        }

        return $tags;
    }
}
