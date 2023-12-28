<?php

use App\Enums\SupportStatus;

if (!function_exists('getStatusSupport')) {
    function getStatusSupport(string $satus): string {
        return SupportStatus::fromValue(($satus));
    }
}