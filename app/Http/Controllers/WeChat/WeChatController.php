<?php

namespace App\Http\Controllers\WeChat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WeChatController extends Controller
{
    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        $app = app('wechat.official_account');
        $app->server->push(function ($message){
            return '您好!欢迎关注EasySwoole!';
        });
        return $app->server->serve();
    }
}
