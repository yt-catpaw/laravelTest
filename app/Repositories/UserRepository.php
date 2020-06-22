<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository {

    protected $model = 'mt_users';

    public function findAll() {

        $users = User::where('active_flg', '=', config('global.active'))
                     ->get();

        return $users;
    }
}
