<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {

    public $userRepository = null;

    public function __construct(){
        $this->userRepository = new UserRepository();
    }

    public function findAll() {
        $users = $this->userRepository->findAll();
        \Log::debug('userServce');
        return $users;
    }
}
