<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        //获取登录用户
        $user = Auth::user();

        //判断是否登录
        if (!$user) {
            login();
        } else {
            return view('admin.index');
        }
    }
    public function login()
    {
        return view('admin.login');
    }
}
