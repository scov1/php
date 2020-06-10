<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * @package App
 *
 * @property-read $id
 * @property $name
 * @property $email
 * @property $password
 * @property $remember_token
 * @property-read $created_at
 * @property-read $updated_at
 * @property Car[]|\Illuminate\Database\Eloquent\Collection $cars
 */

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function cars(){
        return $this->hasMany(Car::class);
    }
}
