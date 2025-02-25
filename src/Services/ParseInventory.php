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
     * @return array<string, mixed>
     * @throws \JsonException
     */
    public static function getInventory(int|string $steamId, AppId $appId, int $contextId): array
    {
        try {
            $response = (new Client())->get(
                sprintf('%s%s/%s/%s', self::BASE_INVENTORY_URL, convertToSteamID64($steamId), $appId->value, $contextId)
            );
            return [
                'success' => true,
                'data' => json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR) ?? [],
            ];
        } catch (GuzzleException $e) {
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
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
        $data = self::getInventory($steamId, $appId, 2);

        if (!isset($data['data']['assets']) && $data['success'] === false) {
            return [];
        }

        $result = [];
        foreach ($data['data']['assets'] as $item) {
            if ($item['classid'] === $classId) {
                $result[] = $item;
            }
        }

        return $result;
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
        $data = self::getInventory($steamId, $appId, 2);

        if (!isset($data['data']['descriptions']) && $data['success'] === false) {
            return null;
        }

        $link = null;
        foreach ($data['data']['descriptions'] as $item) {
            if (isset($item['actions']) && $item['classid'] === $classId) {
                $link = $item['actions'][0]['link'];
            }
        }

        return $link;
    }
}
