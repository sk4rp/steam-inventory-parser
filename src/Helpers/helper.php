<?php

if (! function_exists('convertToSteamID64')) {
    function convertToSteamID64(int|string $steamId): int
    {
        // SteamID64
        if (is_numeric($steamId) && (int) $steamId >= 76561197960265728) {
            return (int) $steamId;
        }

        // SteamID2 (STEAM_X:Y:Z)
        if (preg_match('/^STEAM_[0-5]:([0-1]):(\d+)$/', $steamId, $matches)) {
            return (int) ($matches[2] * 2 + 76561197960265728 + $matches[1]);
        }

        // SteamID3 ([U:1:Z])
        if (preg_match('/^\[U:1:(\d+)]$/', $steamId, $matches)) {
            return (int) ($matches[1] + 76561197960265728);
        }

        throw new \InvalidArgumentException("Invalid SteamID format: $steamId");
    }
}
