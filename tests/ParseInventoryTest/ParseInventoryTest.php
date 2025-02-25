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

    public function testGetSomeItemByClassIdSuccess(): void
    {
        $steamId = '76561198047593268';
        $appId = AppId::CS2;
        $classId = '5537026493';

        $result = ParseInventory::getSomeItemByClassId($steamId, $appId, $classId);

        $this->assertIsArray($result);
        $this->assertNotEmpty($result, 'Not found item in inventory by this classId');

        foreach ($result as $item) {
            $this->assertArrayHasKey('classid', $item);
            $this->assertEquals($classId, $item['classid']);
        }
    }

    public function testGetSomeItemByClassIdFailure(): void
    {
        $steamId = '76561198047593268';
        $appId = AppId::CS2;
        $classId = '999999999';

        $result = ParseInventory::getSomeItemByClassId($steamId, $appId, $classId);

        $this->assertIsArray($result);
        $this->assertEmpty($result, 'Should be empty array');
    }

    public function testGetInspectLinkForItemSuccess(): void
    {
        $steamId = '76561198047593268';
        $appId = AppId::CS2;
        $classId = '5537026494';

        $result = ParseInventory::getInspectLinkForItem($steamId, $appId, $classId);

        $this->assertIsString($result);
        $this->stringContains('steam://rungame/730/');
    }

    public function testGetInspectLinkForItemFailure(): void
    {
        $steamId = '76561198047593268';
        $appId = AppId::CS2;
        $classId = '999999999';

        $result = ParseInventory::getInspectLinkForItem($steamId, $appId, $classId);
        $this->assertNull($result);
    }
}
