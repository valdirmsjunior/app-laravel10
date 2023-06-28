<?php

namespace App\Enums;

enum SupportStatusEnum: string
{
    case A = "Aberto";
    case B = "Pendente";
    case C = "Fechado";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("$status is not a valid");
    }
}