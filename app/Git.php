<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Git extends Model{
    protected $fillable = [
        'user_id','git',
    ];
}