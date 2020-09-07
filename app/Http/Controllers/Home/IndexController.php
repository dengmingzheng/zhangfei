<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //首页
    public function index()
    {

    }

    //招商专区
    public function joinAdvantage()
    {
        return view('home.index.joinAdvantage');
    }

    //联系我们
    public function contact()
    {
        return view('home.index.contact');
    }

    //产业资讯
    public function news()
    {
        return view('home.index.news');
    }

    //手机客户端
    public function mobileClient()
    {
        return view('home.index.mobileClient');
    }

    //忘记密码
    public function forget_password()
    {
        return view('home.index.forget_password');
    }

    public function login()
    {
        return view('home.login');
    }
}
