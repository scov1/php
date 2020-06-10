<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Car extends Model
{
    protected $fillable = [
        'brand','model','year','color'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
