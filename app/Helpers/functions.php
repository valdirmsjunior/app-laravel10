<?php

use App\Enums\SupportStatusEnum;

if (!function_exists('getStatusSupportEnum')) {
    function getStatusSupportEnum(string $status): string {
        return SupportStatusEnum::fromValue($status);
    }
}