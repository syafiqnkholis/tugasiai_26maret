<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $fillable = [
        'password','avatar','sd','email','avatar',
    ];
}