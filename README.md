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
object(App\DTO\InventoryResponseDTO)#7 (5) {
  ["success"]=>
  bool(true)
  ["items"]=>
  array(9) {
    [0]=>
    object(App\DTO\InventoryItemDTO)#27 (4) {
      ["classId"]=>
      string(10) "5537026493"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "37872844887"
      ["amount"]=>
      string(1) "1"
    }
    [1]=>
    object(App\DTO\InventoryItemDTO)#26 (4) {
      ["classId"]=>
      string(10) "5537026494"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "37872844886"
      ["amount"]=>
      string(1) "1"
    }
    [2]=>
    object(App\DTO\InventoryItemDTO)#25 (4) {
      ["classId"]=>
      string(10) "2727227113"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "23874134326"
      ["amount"]=>
      string(1) "1"
    }
    [3]=>
    object(App\DTO\InventoryItemDTO)#22 (4) {
      ["classId"]=>
      string(10) "3117298605"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "23872959599"
      ["amount"]=>
      string(1) "1"
    }
    [4]=>
    object(App\DTO\InventoryItemDTO)#15 (4) {
      ["classId"]=>
      string(10) "1989272830"
      ["instanceId"]=>
      string(9) "302028390"
      ["assetId"]=>
      string(11) "20268523515"
      ["amount"]=>
      string(1) "1"
    }
    [5]=>
    object(App\DTO\InventoryItemDTO)#14 (4) {
      ["classId"]=>
      string(9) "310776570"
      ["instanceId"]=>
      string(9) "302028390"
      ["assetId"]=>
      string(11) "17534367374"
      ["amount"]=>
      string(1) "1"
    }
    [6]=>
    object(App\DTO\InventoryItemDTO)#13 (4) {
      ["classId"]=>
      string(10) "2948874694"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "16902400234"
      ["amount"]=>
      string(1) "1"
    }
    [7]=>
    object(App\DTO\InventoryItemDTO)#11 (4) {
      ["classId"]=>
      string(10) "3106076676"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "16164524250"
      ["amount"]=>
      string(1) "1"
    }
    [8]=>
    object(App\DTO\InventoryItemDTO)#12 (4) {
      ["classId"]=>
      string(9) "778383679"
      ["instanceId"]=>
      string(1) "0"
      ["assetId"]=>
      string(11) "14535796946"
      ["amount"]=>
      string(1) "1"
    }
  }
  ["descriptions"]=>
  array(9) {
    [0]=>
    object(App\DTO\InventoryDescriptionDTO)#32 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "5537026493"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(24) "Music Kit | Valve, CS:GO"
      ["market_hash_name"]=>
      string(24) "Music Kit | Valve, CS:GO"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(159) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXO9B9WLbU5oA9OA1rRS_Ko6J-CHVwmdwZV4b_xegJkivWaKTsbv921wtaNz6fyZO-Gxz0EvpUj2b-SpNS7mFqzxFR2Pic"
      ["inspectLink"]=>
      NULL
    }
    [1]=>
    object(App\DTO\InventoryDescriptionDTO)#9 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "5537026494"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(22) "Global Offensive Badge"
      ["market_hash_name"]=>
      string(22) "Global Offensive Badge"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(163) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fROuk2fDQQFp7a1FU4-rxLVc1h_LOcGQQvovux9fbwKKsMumAxz0CvMYk2b2To9Tz3gD6ux07ellOukQ"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D13990120341890183072"
    }
    [2]=>
    object(App\DTO\InventoryDescriptionDTO)#10 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "2727227113"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(11) "Clutch Case"
      ["market_hash_name"]=>
      string(11) "Clutch Case"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(175) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsUFJ5KBFZv668FFY5naqQIz4R7Yjix9bZkvKiZrmAzzlTu5AoibiT8d_x21Wy8hY_MWz1doSLMlhpM3FKbNs"
      ["inspectLink"]=>
      NULL
    }
    [3]=>
    object(App\DTO\InventoryDescriptionDTO)#19 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "3117298605"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(20) "10 Year Veteran Coin"
      ["market_hash_name"]=>
      string(20) "10 Year Veteran Coin"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(164) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fFrS00s7BUFJ9K0oE7uijeV8w0PfOc2oVv4_lzdfclaP3NeyBkztQ6cAo2LuQoY7x2AC25QMyNEfr61Ns"
      ["inspectLink"]=>
      string(111) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D478730472105998849"
    }
    [4]=>
    object(App\DTO\InventoryDescriptionDTO)#18 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "1989272830"
      ["instanceId"]=>
      string(9) "302028390"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(36) "Graffiti | Jump Shot (Tracer Yellow)"
      ["market_hash_name"]=>
      string(36) "Graffiti | Jump Shot (Tracer Yellow)"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(215) "IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0q_eADEvkYDjQYXHdHg9sS7VaNT6I9mCnsbyWF27BErsuEA5QL6oD9DVMO5yLOBBugYYVu2u_0UdyEhk6f9BKZAarxm1ONekmkXQQMuHZuwA"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D11821497542531877863"
    }
    [5]=>
    object(App\DTO\InventoryDescriptionDTO)#17 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(9) "310776570"
      ["instanceId"]=>
      string(9) "302028390"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(20) "P250 | Boreal Forest"
      ["market_hash_name"]=>
      string(35) "P250 | Boreal Forest (Field-Tested)"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(204) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszOfi9H_8iJlo-Zkvb4DLbUkmJE5Yt307uY89r22QXs_0M_YGHzI4SXdQc4NQuC8gfvxrzt18Lt6cifnCRjpGB8ssSnt9jR"    
      ["inspectLink"]=>
      string(112) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D2605939737977464234"
    }
    [6]=>
    object(App\DTO\InventoryDescriptionDTO)#16 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "2948874694"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(12) "Horizon Case"
      ["market_hash_name"]=>
      string(12) "Horizon Case"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(175) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsUFJ5KBFZv668FFUwnfbOdDgavYXukYTZkqf2ZbrTwmkE6scgj7CY94ml3FXl-ENkMW3wctOLMlhpVHKV9YA"
      ["inspectLink"]=>
      NULL
    }
    [7]=>
    object(App\DTO\InventoryDescriptionDTO)#37 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(10) "3106076676"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(13) "Loyalty Badge"
      ["market_hash_name"]=>
      string(13) "Loyalty Badge"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(166) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fV_ak2srsUVxwIgEZtO6nflNmgfbNc20XvY20ldWIwfKmY7nTwm5X6pQi0-2Xp4mhjAfhql0sPT450jjYFg"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D17007949782937509398"
    }
    [8]=>
    object(App\DTO\InventoryDescriptionDTO)#35 (9) {
      ["appId"]=>
      int(730)
      ["classId"]=>
      string(9) "778383679"
      ["instanceId"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["name"]=>
      string(19) "5 Year Veteran Coin"
      ["market_hash_name"]=>
      string(19) "5 Year Veteran Coin"
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(163) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fEv2o1t3QXFR6a1xUsLzyLV8zhvGeKTgXvN-0kobYwfGiZuuBxjMA6cEi2bvHpYqkjlD6ux07kojlYcY"
      ["inspectLink"]=>
      string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D10152983114456937174"
    }
  }
  ["tags"]=>
  array(33) {
    [0]=>
    object(App\DTO\InventoryTagsDTO)#8 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(18) "CSGO_Type_MusicKit"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(9) "Music Kit"
      ["color"]=>
      string(0) ""
    }
    [1]=>
    object(App\DTO\InventoryTagsDTO)#21 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [2]=>
    object(App\DTO\InventoryTagsDTO)#30 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(11) "Rarity_Rare"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(10) "High Grade"
      ["color"]=>
      string(6) "4b69ff"
    }
    [3]=>
    object(App\DTO\InventoryTagsDTO)#24 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(21) "CSGO_Type_Collectible"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(11) "Collectible"
      ["color"]=>
      string(0) ""
    }
    [4]=>
    object(App\DTO\InventoryTagsDTO)#23 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [5]=>
    object(App\DTO\InventoryTagsDTO)#20 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(14) "Rarity_Ancient"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(13) "Extraordinary"
      ["color"]=>
      string(6) "eb4b4b"
    }
    [6]=>
    object(App\DTO\InventoryTagsDTO)#36 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(20) "CSGO_Type_WeaponCase"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(9) "Container"
      ["color"]=>
      string(0) ""
    }
    [7]=>
    object(App\DTO\InventoryTagsDTO)#28 (5) {
      ["category"]=>
      string(7) "ItemSet"
      ["internal_name"]=>
      string(16) "set_community_19"
      ["localized_category_name"]=>
      string(10) "Collection"
      ["localized_tag_name"]=>
      string(21) "The Clutch Collection"
      ["color"]=>
      string(0) ""
    }
    [8]=>
    object(App\DTO\InventoryTagsDTO)#38 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [9]=>
    object(App\DTO\InventoryTagsDTO)#39 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(13) "Rarity_Common"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(10) "Base Grade"
      ["color"]=>
      string(6) "b0c3d9"
    }
    [10]=>
    object(App\DTO\InventoryTagsDTO)#40 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(21) "CSGO_Type_Collectible"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(11) "Collectible"
      ["color"]=>
      string(0) ""
    }
    [11]=>
    object(App\DTO\InventoryTagsDTO)#41 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [12]=>
    object(App\DTO\InventoryTagsDTO)#42 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(14) "Rarity_Ancient"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(13) "Extraordinary"
      ["color"]=>
      string(6) "eb4b4b"
    }
    [13]=>
    object(App\DTO\InventoryTagsDTO)#43 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(15) "CSGO_Type_Spray"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(8) "Graffiti"
      ["color"]=>
      string(0) ""
    }
    [14]=>
    object(App\DTO\InventoryTagsDTO)#44 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [15]=>
    object(App\DTO\InventoryTagsDTO)#45 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(13) "Rarity_Common"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(10) "Base Grade"
      ["color"]=>
      string(6) "b0c3d9"
    }
    [16]=>
    object(App\DTO\InventoryTagsDTO)#46 (5) {
      ["category"]=>
      string(18) "SprayColorCategory"
      ["internal_name"]=>
      string(5) "Tint6"
      ["localized_category_name"]=>
      string(14) "Graffiti Color"
      ["localized_tag_name"]=>
      string(13) "Tracer Yellow"
      ["color"]=>
      string(0) ""
    }
    [17]=>
    object(App\DTO\InventoryTagsDTO)#47 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(16) "CSGO_Type_Pistol"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(6) "Pistol"
      ["color"]=>
      string(0) ""
    }
    [18]=>
    object(App\DTO\InventoryTagsDTO)#48 (5) {
      ["category"]=>
      string(6) "Weapon"
      ["internal_name"]=>
      string(11) "weapon_p250"
      ["localized_category_name"]=>
      string(6) "Weapon"
      ["localized_tag_name"]=>
      string(4) "P250"
      ["color"]=>
      string(0) ""
    }
    [19]=>
    object(App\DTO\InventoryTagsDTO)#49 (5) {
      ["category"]=>
      string(7) "ItemSet"
      ["internal_name"]=>
      string(8) "set_lake"
      ["localized_category_name"]=>
      string(10) "Collection"
      ["localized_tag_name"]=>
      string(19) "The Lake Collection"
      ["color"]=>
      string(0) ""
    }
    [20]=>
    object(App\DTO\InventoryTagsDTO)#50 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [21]=>
    object(App\DTO\InventoryTagsDTO)#51 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(20) "Rarity_Common_Weapon"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(14) "Consumer Grade"
      ["color"]=>
      string(6) "b0c3d9"
    }
    [22]=>
    object(App\DTO\InventoryTagsDTO)#52 (5) {
      ["category"]=>
      string(8) "Exterior"
      ["internal_name"]=>
      string(13) "WearCategory2"
      ["localized_category_name"]=>
      string(8) "Exterior"
      ["localized_tag_name"]=>
      string(12) "Field-Tested"
      ["color"]=>
      string(0) ""
    }
    [23]=>
    object(App\DTO\InventoryTagsDTO)#53 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(20) "CSGO_Type_WeaponCase"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(9) "Container"
      ["color"]=>
      string(0) ""
    }
    [24]=>
    object(App\DTO\InventoryTagsDTO)#54 (5) {
      ["category"]=>
      string(7) "ItemSet"
      ["internal_name"]=>
      string(16) "set_community_20"
      ["localized_category_name"]=>
      string(10) "Collection"
      ["localized_tag_name"]=>
      string(22) "The Horizon Collection"
      ["color"]=>
      string(0) ""
    }
    [25]=>
    object(App\DTO\InventoryTagsDTO)#55 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [26]=>
    object(App\DTO\InventoryTagsDTO)#56 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(13) "Rarity_Common"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(10) "Base Grade"
      ["color"]=>
      string(6) "b0c3d9"
    }
    [27]=>
    object(App\DTO\InventoryTagsDTO)#57 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(21) "CSGO_Type_Collectible"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(11) "Collectible"
      ["color"]=>
      string(0) ""
    }
    [28]=>
    object(App\DTO\InventoryTagsDTO)#58 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [29]=>
    object(App\DTO\InventoryTagsDTO)#59 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(14) "Rarity_Ancient"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(13) "Extraordinary"
      ["color"]=>
      string(6) "eb4b4b"
    }
    [30]=>
    object(App\DTO\InventoryTagsDTO)#60 (5) {
      ["category"]=>
      string(4) "Type"
      ["internal_name"]=>
      string(21) "CSGO_Type_Collectible"
      ["localized_category_name"]=>
      string(4) "Type"
      ["localized_tag_name"]=>
      string(11) "Collectible"
      ["color"]=>
      string(0) ""
    }
    [31]=>
    object(App\DTO\InventoryTagsDTO)#61 (5) {
      ["category"]=>
      string(7) "Quality"
      ["internal_name"]=>
      string(6) "normal"
      ["localized_category_name"]=>
      string(8) "Category"
      ["localized_tag_name"]=>
      string(6) "Normal"
      ["color"]=>
      string(0) ""
    }
    [32]=>
    object(App\DTO\InventoryTagsDTO)#62 (5) {
      ["category"]=>
      string(6) "Rarity"
      ["internal_name"]=>
      string(14) "Rarity_Ancient"
      ["localized_category_name"]=>
      string(7) "Quality"
      ["localized_tag_name"]=>
      string(13) "Extraordinary"
      ["color"]=>
      string(6) "eb4b4b"
    }
  }
  ["message"]=> NULL
}
```
## getSomeItemByClassId
```php
array(1) {
  [0]=>
  object(App\DTO\InventoryItemDTO)#27 (4) {
    ["classId"]=>
    string(10) "5537026493"
    ["instanceId"]=>
    string(1) "0"
    ["assetId"]=>
    string(11) "37872844887"
    ["amount"]=>
    string(1) "1"
  }
}
```
## getInspectLinkForItem
```php
string(113) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D13990120341890183072"
```


