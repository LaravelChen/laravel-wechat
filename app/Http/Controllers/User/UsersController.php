<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function get_users()
    {
        $user = session('wechat.oauth_user'); // 拿到授权用户资料
        dd($user);
    }
}
