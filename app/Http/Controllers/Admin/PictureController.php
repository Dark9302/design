<?php

namespace App\Http\Controllers\Admin;

use App\Model\Dao\PictureDao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureController extends Controller
{
    /**幻灯片列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $pic = new PictureDao();

        $list = $pic->getPicList();

        $num = count($list);
        return view('Admin.Index.index')
            ->with('list',$list)
            ->with('num',$num);
    }

    /**图片添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addPic(){
        return view('Admin.Index.add');
    }

    /**执行图片添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAddPic(Request $request){
        $picture = new PictureDao();

        $inf = $request->all();

        //获取上传图片
        $pic = $request->file('pic');
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

            //组合添加条件
            $data['title1'] = $inf['title1'];
            $data['title2'] = $inf['title2'];
            $data['url'] = $inf['url'];
            $data['picture'] = $picUrl;

            $addRes = $picture->addPic($data);

            if($addRes !== false && $bool){
                return response()->json('添加成功');
            }else{
                return response()->json('添加失败！');
            }
        }else{
            return response()->json('请添加图片！');
        }
    }

    /**图片编辑页面
     * @param $id
     * @return $this
     */
    public function editPic($id){
        $picture = new PictureDao();

        //组合查询条件
        $con['id'] = $id;
        $pic = $picture->getSinglePic($con);

        return view("Admin.Index.edit")
            ->with('pic',$pic);
    }

    /**执行文章编辑
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doEditPic(Request $request){
        $picture = new PictureDao();
        //获取传递过来的内容
        $inf = $request->all();

        //获取上传图片
        $pic = $request->file('pic');
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
            $picUrl = '';
            $bool = 1;
        }

        //组合更新条件和内容
        $con['id'] = $inf['id'];
        $data['title1'] = $inf['title1'];
        $data['title2'] = $inf['title2'];
        $data['url'] = $inf['url'];
        if($picUrl){
            $data['picture'] = $picUrl;
        }

        $res = $picture->upPic($con,$data);
        if($res !== false && $bool){
            return response()->json('修改成功');
        }else{
            return response()->json('修改失败！');
        }
    }

    /**删除单条
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delSinglePic(Request $request){
        $picture = new PictureDao();
        //获取传递过来的id
        $id = $request->get('id');

        $con['id'] = $id;
        $res = $picture->delPic($con);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }

    /**删除多条
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMorePic(Request $request){
        $picture = new PictureDao();
        //获取传递过来的id
        $id = $request->get('ids');

        $res = $picture->delMorePic($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }
}
