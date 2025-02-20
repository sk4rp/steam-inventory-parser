<?php

declare(strict_types=1);

namespace Tests\ParseInventoryTest;

use App\Enums\AppId;
use App\Services\ParseInventory;
use PHPUnit\Framework\TestCase;

final class ParseInventoryTest extends TestCase
{
    public function testGetInventorySuccess(): void
    {
        $steamId = 'STEAM_0:0:43663770';
        $appId = AppId::CS2;
        $contextId = 2;

        $data = ParseInventory::getInventory($steamId, $appId, $contextId);

        $this->assertIsArray($data);
        $this->assertArrayHasKey('success', $data);
        $this->assertTrue($data['success']);
    }

    public function testGetInventoryFailure(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid SteamID format');

        $steamId = '1323213131212123';
        $appId = AppId::CS2;
        $contextId = 2;

        ParseInventory::getInventory($steamId, $appId, $contextId);
    }
}
