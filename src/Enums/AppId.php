<?php

namespace App\Enums;

use App\Traits\EnumBase;

enum AppId: int
{
    use EnumBase;
    case CS2 = 730;
    case DOTA2 = 570;
    case RUST = 252490;
    case TF2 = 440;
}
