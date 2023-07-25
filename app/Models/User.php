<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN = 0;
    const ROLE_MEMBER = 1;
    const ROLE_USER = 2;
    const ROLE_GUEST = 3;

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_MEMBER => 'Member',
        self::ROLE_USER => 'User',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isMember()
    {
        return $this->role === self::ROLE_MEMBER;
    }

    public function isUser()
    {
        return $this->role === self::ROLE_USER;
    }

    public function isGuest()
    {
        return $this->role === self::ROLE_GUEST;
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
