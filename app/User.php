<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'role', 'isActive',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function getRoleLabelAttribute()
    {
        $roles = ['1' => 'admin', '2' => 'operator'];
        return $roles[strval($this->role)];
    }

    public function hasRole($role)
    {
        $roles = ['operator' => '2'];

        return array_key_exists($role, $roles);
    }

    public function isAdmin()
    {
        if ($this->role === 1) {
            return true;
        } else {
            return false;
        }
    }
}
