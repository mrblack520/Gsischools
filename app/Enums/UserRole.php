<?php

namespace App\Enums;

enum UserRole: string
{
    case Admin = 'admin';
    case Customer = 'customer';
    case Internal = 'internal_user';

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Customer => 'Customer',
            self::Internal => 'Internal User',
        };
    }
}
