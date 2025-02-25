# Usage:
```php
require __DIR__ . '/../vendor/autoload.php';

use App\Enums\AppId;
use App\Services\ParseInventory;

// SteamID64
$result1 = ParseInventory::getInventory(76561198047593268, AppId::CS2, 2);
//$result1 = ParseInventory::getSomeItemByClassId(76561198047593268, AppId::CS2, "5537026493");
//$result1 = ParseInventory::getInspectLinkForItem(76561198047593268, AppId::CS2, "5537026494");


// SteamID2
$result2 = ParseInventory::getInventory('STEAM_0:0:43663770', AppId::CS2, 2);
//$result2 = ParseInventory::getSomeItemByClassId('STEAM_0:0:43663770', AppId::CS2, "5537026493");
//$result2 = ParseInventory::getInspectLinkForItem(76561198047593268, AppId::CS2, "5537026494");


// SteamID3
$result3 = ParseInventory::getInventory('[U:1:87327540]', AppId::CS2, 2);
//$result3 = ParseInventory::getSomeItemByClassId('[U:1:87327540]', AppId::CS2, "5537026493");
//$result3 = ParseInventory::getInspectLinkForItem(76561198047593268, AppId::CS2, "5537026494");


// var_dump($result1);
// var_dump($result2);
// var_dump($result3);
```
## getInventory
```php
object(App\DTO\InventoryResponseDTO)#7 (4) {
  ["success"]=>
  bool(true)
  ["items"]=>
  array(9) {
    [0]=>
    object(App\DTO\InventoryItemDTO)#8 (3) {
      ["classId"]=>
      string(10) "5537026493"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "37872844887"
    }
    [1]=>
    object(App\DTO\InventoryItemDTO)#27 (3) {
      ["classId"]=>
      string(10) "5537026494"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "37872844886"
    }
    [2]=>
    object(App\DTO\InventoryItemDTO)#26 (3) {
      ["classId"]=>
      string(10) "2727227113"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "23874134326"
    }
    [3]=>
    object(App\DTO\InventoryItemDTO)#25 (3) {
      ["classId"]=>
      string(10) "3117298605"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "23872959599"
    }
    [4]=>
    object(App\DTO\InventoryItemDTO)#22 (3) {
      ["classId"]=>
      string(10) "1989272830"
      ["instanceId"]=>
      string(9) "302028390"
      ["assetId"]=>
      string(11) "20268523515"
    }
    [5]=>
    object(App\DTO\InventoryItemDTO)#15 (3) {
      ["classId"]=>
      string(9) "310776570"
      ["instanceId"]=>
      string(9) "302028390"
      ["assetId"]=>
      string(11) "17534367374"
    }
    [6]=>
    object(App\DTO\InventoryItemDTO)#14 (3) {
      ["classId"]=>
      string(10) "2948874694"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "16902400234"
    }
    [7]=>
    object(App\DTO\InventoryItemDTO)#13 (3) {
      ["classId"]=>
      string(10) "3106076676"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "16164524250"
    }
    [8]=>
    object(App\DTO\InventoryItemDTO)#11 (3) {
      ["classId"]=>
      string(9) "778383679"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "14535796946"
    }
  }
  ["descriptions"]=>
  array(9) {
    [0]=>
    object(App\DTO\InventoryDescriptionDTO)#12 (2) {
      ["classId"]=>
      string(10) "5537026493"
      ["inspectLink"]=>
      NULL
    }
    [1]=>
    object(App\DTO\InventoryDescriptionDTO)#32 (2) {
      ["classId"]=>
      string(10) "5537026494"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D13990120341890183072"
    }
    [2]=>
    object(App\DTO\InventoryDescriptionDTO)#9 (2) {
      ["classId"]=>
      string(10) "2727227113"
      ["inspectLink"]=>
      NULL
    }
    [3]=>
    object(App\DTO\InventoryDescriptionDTO)#10 (2) {
      ["classId"]=>
      string(10) "3117298605"
      ["inspectLink"]=>
      string(111) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D478730472105998849"
    }
    [4]=>
    object(App\DTO\InventoryDescriptionDTO)#19 (2) {
      ["classId"]=>
      string(10) "1989272830"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D11821497542531877863"
    }
    [5]=>
    object(App\DTO\InventoryDescriptionDTO)#18 (2) {
      ["classId"]=>
      string(9) "310776570"
      ["inspectLink"]=>
      string(112) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D2605939737977464234"
    }
    [6]=>
    object(App\DTO\InventoryDescriptionDTO)#17 (2) {
      ["classId"]=>
      string(10) "2948874694"
      ["inspectLink"]=>
      NULL
    }
    [7]=>
    object(App\DTO\InventoryDescriptionDTO)#16 (2) {
      ["classId"]=>
      string(10) "3106076676"
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D17007949782937509398"
    }
    [8]=>
    object(App\DTO\InventoryDescriptionDTO)#37 (2) {
      ["classId"]=>
      string(9) "778383679"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D10152983114456937174"
    }
  }
  ["message"]=>
  NULL
}
```
## getSomeItemByClassId
```php
array(1) {
  [0]=>
  object(App\DTO\InventoryItemDTO)#8 (3) {
    ["classId"]=>
    string(10) "5537026493"
    ["instanceId"]=>
    string(1) "0"
    ["assetId"]=>
    string(11) "37872844887"
  }
}
```
## getInspectLinkForItem
```php
string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D13990120341890183072"
```


