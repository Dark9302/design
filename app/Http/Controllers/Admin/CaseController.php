<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{
    /**案例主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('Admin.Case.index');
    }

    /**案例添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        return view('Admin.Case.add');
    }

    /**案例编辑页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(){
        return view('Admin.Case.edit');
    }

    /**案例分类页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function type(){
        return view('Admin.Case.type');
    }

    /**案例分类添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addType(){
        return view('Admin.Case.addType');
    }
}
