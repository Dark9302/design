<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    /**后台主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('Admin.index');
    }

    /**后台登录页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('Admin.login');
    }

    /**后台欢迎页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome(){
        return view('Admin.welcome');
    }

    /**公司信息页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function companyInf(){
        return view('Admin.BaseInf.index');
    }
}
