<?php

namespace App\Http\Controllers\Admin;

use App\Model\Dao\CompanyDao;
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
        $com = new CompanyDao();

        $comInf = $com->getCompany();
        return view('Admin.BaseInf.index')
            ->with('comInf',$comInf);
    }

    /**更新基本信息
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function upCompany(Request $request){
        $com = new CompanyDao();
        //获取传递过来的数据
        $inf = $request->all();

        //组合更新条件
        $con['id'] = $inf['id'];
        $data['name'] = $inf['name'];
        $data['brief'] = $inf['brief'];
        $data['address'] = $inf['address'];
        $data['phone'] = $inf['phone'];
        $data['email'] = $inf['email'];
        $data['culture'] = $inf['culture'];
        $data['process'] = $inf['process'];
        $data['web_title'] = $inf['web_title'];
        $data['web_keyword'] = $inf['web_keyword'];
        $data['web_description'] = $inf['web_description'];
        $data['web_copyright'] = $inf['web_copyright'];
        $data['web_icp'] = $inf['web_icp'];
        $upRes = $com->upCompany($con,$data);

        if($upRes!==false){
            return response()->json('保存成功');
        }else{
            return response()->json('保存失败');
        }
    }
}
