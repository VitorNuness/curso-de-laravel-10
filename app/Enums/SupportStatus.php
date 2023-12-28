<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = "Open";
    case P = "Pendent";
    case C = "Closed";

    public static function fromValue(string $value): string
    {
        foreach (self::cases() as $status) {
            if ($value === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status in not a valid");
    }
}