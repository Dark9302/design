<?php

namespace App\Http\Controllers\Admin;

use App\Model\Service\TeamService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignerController extends Controller
{
    /**设计师列表页面
     * @return $this
     */
    public function index(){
        $des = new TeamService();

        //获取设计师列表
        $list = $des->getDesList();

        $num = count($list);

        return view('Admin.Designer.index')
            ->with('list',$list)
            ->with('num',$num);
    }

    /**设计师添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        return view('Admin.Designer.add');
    }

    /**执行文章添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAdd(Request $request){
        $des = new TeamService();

        //获取传递过来的输入内容
        $inf = $request->all();
        //获取上传图片
        $pic = $request->file('photo');

        if($pic){
            //得到图片名
            $name=$pic->getClientOriginalName();
            //得到图片后缀
            $ext=$pic->getClientOriginalExtension();
            $fileName=md5(uniqid($name));
            //生成新的的文件名
            $fileName=$fileName.'.'.$ext;
            $bool=\Storage::disk('pic')->put($fileName,file_get_contents($pic->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl='storage/upload/'.$fileName;

            $addRes = $des->addDes($inf['name'],$inf['post'],$inf['work_year'],$inf['brief'],$picUrl,$inf['design_concept'],$inf['style']);

            if($addRes !== false && $bool){
                return response()->json('添加成功');
            }else{
                return response()->json('添加失败！');
            }
        }else{
            return response()->json('请添加图片！');
        }
    }

    /**设计师编辑页面
     * @param $id
     * @return $this
     */
    public function edit($id){
        $des = new TeamService();

        $res = $des->getSingleDes($id);

        return view('Admin.Designer.edit')
            ->with('res',$res);
    }

    /**设计师信息修改
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doEdit(Request $request){
        $des = new TeamService();

        //获取传递过来的输入内容
        $inf = $request->all();
        //获取上传图片
        $pic = $request->file('photo');

        if($pic){
            //得到图片名
            $name=$pic->getClientOriginalName();
            //得到图片后缀
            $ext=$pic->getClientOriginalExtension();
            $fileName=md5(uniqid($name));
            //生成新的的文件名
            $fileName=$fileName.'.'.$ext;
            $bool=\Storage::disk('pic')->put($fileName,file_get_contents($pic->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl='storage/upload/'.$fileName;

        }else{
            $picUrl='';
            $bool= 1;
        }

        $res = $des->editDesign($inf['id'],$inf['name'],$inf['post'],$inf['work_year'],$inf['brief'],$picUrl,$inf['design_concept'],$inf['style']);

        if($res !== false && $bool){
            return response()->json('修改成功');
        }else{
            return response()->json('修改失败！');
        }
    }

    /**删除设计师
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delSingleDes(Request $request){
        $des = new TeamService();

        $id = $request->get('id');
        $res = $des->delDes($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }

    /**批量删除
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMoreDes(Request $request){
        $des = new TeamService();
        //获取传递过来的id
        $id = $request->get('ids');

        $res = $des->delMoreDes($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }
}
