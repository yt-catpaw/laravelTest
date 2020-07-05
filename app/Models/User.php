<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    
    protected $table      = 'mt_users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'password', 'email'
    ];
}
