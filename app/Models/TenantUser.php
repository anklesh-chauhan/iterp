<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;

class TenantUser extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return true; // Allow access to the Filament panel
    }
}

