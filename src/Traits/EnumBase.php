<?php

namespace App\Traits;

trait EnumBase
{
    /**
     * @return array<string|int>
     */
    public static function values(): array
    {
        return array_map(static fn ($enum) => $enum->value, self::cases());
    }

    /**
     * @return array<string>
     */
    public static function names(): array
    {
        return array_map(static fn ($enum) => $enum->name, self::cases());
    }

    /**
     * @return array<string|int, string|int>
     */
    public static function list(): array
    {
        $arr = [];
        foreach (self::cases() as $case) {
            $arr[$case->value] = $case->name;
        }
        return $arr;
    }
}
