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
array(5) {
  ["assets"]=>
  array(9) {
    [0]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "37872844887"
      ["classid"]=>
      string(10) "5537026493"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [1]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "37872844886"
      ["classid"]=>
      string(10) "5537026494"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [2]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "23874134326"
      ["classid"]=>
      string(10) "2727227113"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [3]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "23872959599"
      ["classid"]=>
      string(10) "3117298605"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [4]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "20268523515"
      ["classid"]=>
      string(10) "1989272830"
      ["instanceid"]=>
      string(9) "302028390"
      ["amount"]=>
      string(1) "1"
    }
    [5]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "17534367374"
      ["classid"]=>
      string(9) "310776570"
      ["instanceid"]=>
      string(9) "302028390"
      ["amount"]=>
      string(1) "1"
    }
    [6]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "16902400234"
      ["classid"]=>
      string(10) "2948874694"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [7]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "16164524250"
      ["classid"]=>
      string(10) "3106076676"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
    [8]=>
    array(6) {
      ["appid"]=>
      int(730)
      ["contextid"]=>
      string(1) "2"
      ["assetid"]=>
      string(11) "14535796946"
      ["classid"]=>
      string(9) "778383679"
      ["instanceid"]=>
      string(1) "0"
      ["amount"]=>
      string(1) "1"
    }
  }
  ["descriptions"]=>
  array(9) {
    [0]=>
    array(18) {
      ["appid"]=>
      int(730)
      ["classid"]=>
      string(10) "5537026493"
      ["instanceid"]=>
      string(1) "0"
      ["currency"]=>
      int(0)
      ["background_color"]=>
      string(0) ""
      ["icon_url"]=>
      string(159) "-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXO9B9WLbU5oA9OA1rRS_Ko6J-CHVwmdwZV4b_xegJkivWaKTsbv921wtaNz6fyZO-Gxz0EvpUj2b-SpNS7mFqzxFR2Pic"
      ["descriptions"]=>
      array(5) {
        [0]=>
        array(3) {
          ["type"]=>
          string(4) "html"
          ["value"]=>
          string(324) "This Music Kit will replace all of the music in the game and is shareable with anyone you are playing with. It also includes an MVP Anthem that plays for everyone in the match when you are MVP.

The Music Kit replaces the following music:
- Main Menu
- Round Start and End
- Map Objective
- Ten Second Warning
- Death Camera"
          ["name"]=>
          string(11) "description"
        }
        [1]=>
        array(3) {
          ["type"]=>
          string(4) "html"
          ["value"]=>
          string(1) " "
          ["name"]=>
          string(5) "blank"
        }
        [2]=>
        array(3) {
          ["type"]=>
          string(4) "html"
          ["value"]=>
          string(73) "The default CS:GO music kit, introduced with the launch of CS:GO in 2012."
          ["name"]=>
          string(11) "description"
        }
        [3]=>
        array(3) {
          ["type"]=>
          string(4) "html"
          ["value"]=>
          string(1) " "
          ["name"]=>
          string(5) "blank"
        }
        [4]=>
        array(3) {
          ["type"]=>
          string(4) "html"
          ["value"]=>
          string(0) ""
          ["name"]=>
          string(9) "attribute"
        }
      }
      ["tradable"]=>
      int(0)
      ["name"]=>
      string(24) "Music Kit | Valve, CS:GO"
      ["name_color"]=>
      string(6) "D2D2D2"
      ["type"]=>
      string(20) "High Grade Music Kit"
      ["market_name"]=>
      string(24) "Music Kit | Valve, CS:GO"
      ["market_hash_name"]=>
      string(24) "Music Kit | Valve, CS:GO"
      ["commodity"]=>
      int(1)
      ["market_tradable_restriction"]=>
      int(7)
      ["market_marketable_restriction"]=>
      int(7)
      ["marketable"]=>
      int(0)
      ["tags"]=>
      array(3) {
        [0]=>
        array(4) {
          ["category"]=>
          string(4) "Type"
          ["internal_name"]=>
          string(18) "CSGO_Type_MusicKit"
          ["localized_category_name"]=>
          string(4) "Type"
          ["localized_tag_name"]=>
          string(9) "Music Kit"
        }
        [1]=>
        array(4) {
          ["category"]=>
          string(7) "Quality"
          ["internal_name"]=>
          string(6) "normal"
          ["localized_category_name"]=>
          string(8) "Category"
          ["localized_tag_name"]=>
          string(6) "Normal"
        }
        [2]=>
        array(5) {
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
      }
    } ...... and more
```
## getSomeItemByClassId
```php
array(1) {
  [0]=>
  array(6) {
    ["appid"]=>
    int(730)
    ["contextid"]=>
    string(1) "2"
    ["assetid"]=>
    string(11) "37872844887"
    ["classid"]=>
    string(10) "5537026493"
    ["instanceid"]=>
    string(1) "0"
    ["amount"]=>
    string(1) "1"
  }
}
```
## getInspectLinkForItem
```php
string(112) "steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S%owner_steamid%A%assetid%D4767876133728707846"
```


