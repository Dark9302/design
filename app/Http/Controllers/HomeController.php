<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //创建一个控制器实例
    public function __construct()
    {
        $this->middleware('auth');
    }

    //显示模板
    public function index()
    {
        return view('home');
    }
}
