<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\ParseContract;
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
     * @return array
     * @throws \JsonException
     */
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): array
    {
        try {
            $response = (new Client())->get(
                sprintf('%s%s/%s/%s', self::BASE_INVENTORY_URL, convertToSteamID64($steamId), $appId->value, $contextId)
            );
            return json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR) ?? [];
        } catch (GuzzleException $e) {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}
