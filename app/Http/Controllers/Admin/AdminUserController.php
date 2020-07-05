<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Services\UserService;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public $userService = null;

    public function __construct(){
        $this->userService = new UserService();
    }

    public function index(Request $request) {

        $users = $this->userService->findAll();

        return view('admin.user_list', ['users' => $users]);

    }

}
