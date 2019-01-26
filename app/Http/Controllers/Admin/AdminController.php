<?php

namespace App\Http\Controllers\Admin;

use App\Model\Dao\AdminDao;
use App\Model\Dao\CompanyDao;
use App\Model\Dao\CustomerDao;
use App\Model\Dao\ServiceDao;
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

    /**登录验证
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkLogin(Request $request){
        $admin = new AdminDao();
        //组合查询条件
        $con['name'] = $request->get('name');
        $con['password'] = md5(md5($request->get('pwd')));

        $res = $admin->getAdmin($con);

        if($res){
            return response()->json('success');
        }else{
            return response()->json('error');
        }
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
        $data['index_brief'] = $inf['index_brief'];
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

    /**首页服务
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function baseService(){
        $ser = new ServiceDao();

        $res = $ser->getServiceList();
        return view('Admin.Index.service')
            ->with('ser',$res);
    }

    public function upService(Request $request){
        $ser = new ServiceDao();
        //获取所有数据
        $inf = $request->all();

        //获取上传图片
        $pic1 = $request->file('picture1');
        $pic2 = $request->file('picture2');
        $pic3 = $request->file('picture3');
        $pic4 = $request->file('picture4');

        if($pic1){
            //得到图片名
            $name1=$pic1->getClientOriginalName();
            //得到图片后缀
            $ext1=$pic1->getClientOriginalExtension();
            $fileName1=md5(uniqid($name1));
            //生成新的的文件名
            $fileName1=$fileName1.'.'.$ext1;
            $bool1=\Storage::disk('pic')->put($fileName1,file_get_contents($pic1->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl1='storage/upload/'.$fileName1;
        }else{
            $picUrl1='';
            $bool1= 1;
        }

        if($pic2){
            $name2=$pic2->getClientOriginalName();
            $ext2=$pic2->getClientOriginalExtension();
            $fileName2=md5(uniqid($name2));
            $fileName2=$fileName2.'.'.$ext2;
            $bool2=\Storage::disk('pic')->put($fileName2,file_get_contents($pic2->getRealPath()));
            $picUrl2='storage/upload/'.$fileName2;
        }else{
            $picUrl2='';
            $bool2= 1;
        }

        if($pic3){
            $name3=$pic3->getClientOriginalName();
            $ext3=$pic3->getClientOriginalExtension();
            $fileName3=md5(uniqid($name3));
            $fileName3=$fileName3.'.'.$ext3;
            $bool3=\Storage::disk('pic')->put($fileName3,file_get_contents($pic3->getRealPath()));
            $picUrl3='storage/upload/'.$fileName3;
        }else{
            $picUrl3='';
            $bool3= 1;
        }

        if($pic4){
            $name4=$pic4->getClientOriginalName();
            $ext4=$pic4->getClientOriginalExtension();
            $fileName4=md5(uniqid($name4));
            $fileName4=$fileName4.'.'.$ext4;
            $bool4=\Storage::disk('pic')->put($fileName4,file_get_contents($pic4->getRealPath()));
            $picUrl4='storage/upload/'.$fileName4;
        }else{
            $picUrl4='';
            $bool4= 1;
        }

        //组合更新条件和内容
        $con['id'] = $inf['id'];
        $data['name1'] = $inf['name1'];
        $data['content1'] = $inf['content1'];
        $data['url1'] = $inf['url1'];
        if($picUrl1){
            $data['picture1'] = $picUrl1;
        }
        $data['name2'] = $inf['name2'];
        $data['content2'] = $inf['content2'];
        $data['url2'] = $inf['url2'];
        if($picUrl2){
            $data['picture2'] = $picUrl2;
        }
        $data['name3'] = $inf['name3'];
        $data['content3'] = $inf['content3'];
        $data['url3'] = $inf['url3'];
        if($picUrl3){
            $data['picture3'] = $picUrl3;
        }
        $data['name4'] = $inf['name4'];
        $data['content4'] = $inf['content4'];
        $data['url4'] = $inf['url4'];
        if($picUrl4){
            $data['picture4'] = $picUrl4;
        }

        $res = $ser->upService($con,$data);

        if($res !== false && $bool1 && $bool2 && $bool3 && $bool4){
            return response()->json('保存成功');
        }else{
            return response()->json('保存失败！');
        }
    }

    /**用户反馈列表
     * @return $this
     */
    public function customer(){
        $cus = new CustomerDao();
        $list = $cus->getCusList();
        $num = count($list);
        return view('Admin.Customer.Customer')
            ->with('list',$list)
            ->with('num',$num);
    }
}
