<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserApi extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'api_id', 'email', 'first_name', 'last_name', 'avatar'
    ];
}

