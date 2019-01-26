<?php

namespace App\Http\Controllers\Admin;

use App\Model\Dao\CaseTeamDao;
use App\Model\Service\CaseService;
use App\Model\Service\TeamService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CaseController extends Controller
{
    /**案例主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $case = new CaseService();
        //获取案例列表
        $case = $case->getCaseList();
        //获取条目数
        $num = count($case);
        return view('Admin.Case.index')
            ->with('list',$case)
            ->with('num',$num);
    }

    /**案例添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        $case = new CaseService();
        //获取案例分类列表
        $type = $case->getTypeList('1');
        return view('Admin.Case.add')
            ->with('type',$type);
    }

    /**执行案例添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAdd(Request $request){
        $case = new CaseService();
        //获取传递过来的数据
        $inf = $request->all();
        //获取上传图片
        $pic1 = $request->file('casePic1');
        $pic2 = $request->file('casePic2');
        $pic3 = $request->file('casePic3');

        if($pic1 && $pic2 && $pic3){
            //得到图片名
            $name1=$pic1->getClientOriginalName();
            $name2=$pic2->getClientOriginalName();
            $name3=$pic3->getClientOriginalName();
            //得到图片后缀
            $ext1=$pic1->getClientOriginalExtension();
            $ext2=$pic2->getClientOriginalExtension();
            $ext3=$pic3->getClientOriginalExtension();
            $fileName1=md5(uniqid($name1));
            $fileName2=md5(uniqid($name2));
            $fileName3=md5(uniqid($name3));
            //生成新的的文件名
            $fileName1=$fileName1.'.'.$ext1;
            $fileName2=$fileName2.'.'.$ext2;
            $fileName3=$fileName3.'.'.$ext3;
            $bool1=\Storage::disk('pic')->put($fileName1,file_get_contents($pic1->getRealPath()));
            $bool2=\Storage::disk('pic')->put($fileName2,file_get_contents($pic2->getRealPath()));
            $bool3=\Storage::disk('pic')->put($fileName3,file_get_contents($pic3->getRealPath()));
            //返回文件路径存贮在数据库
            $picUrl1='storage/upload/'.$fileName1;
            $picUrl2='storage/upload/'.$fileName2;
            $picUrl3='storage/upload/'.$fileName3;

            DB::beginTransaction();

            $addId = $case->addCase($inf['title'],$inf['type'],$inf['content'],$inf['information'],$inf['area'],$picUrl1,$picUrl2,$picUrl3,$inf['price'],$inf['address']);

            if($addId && $bool1 && $bool2 && $bool3){
                $addRes = $case->addCaseAndDes($addId,$inf['caseTeam']);
                if($addRes !== false){
                    DB::commit();
                    return response()->json('添加成功');
                }else{
                    DB::rollBack();
                    return response()->json('添加失败');
                }
            }else{
                DB::rollBack();
                return response()->json('添加失败');
            }
        }else{
            return response()->json('请添加三张图片！');
        }
    }

    /**选择设计师
     * @return $this
     */
    public function selectDesigner(){
        $des = new TeamService();
        //获取设计师列表
        $list = $des->getDesList();
        return view('Admin.Case.selectDesigner')
            ->with('list',$list)->with('num',count($list));
    }

    /**案例编辑页面
     * @param $id
     * @return $this
     */
    public function edit($id){
        $case = new CaseService();
        //获取案例信息
        $inf = $case->getSingleCase($id);
        //获取案例分类列表
        $type = $case->getTypeList('1');

        $desId = $case->getCaseDesigner($id);
        return view('Admin.Case.edit')
            ->with('type',$type)->with('inf',$inf)
            ->with('des',$desId);
    }

    /**执行案例编辑
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doEdit(Request $request){
        $case = new CaseService();
        //获取传递过来的数据
        $inf = $request->all();
        //获取上传图片
        $pic1 = $request->file('casePic1');
        $pic2 = $request->file('casePic2');
        $pic3 = $request->file('casePic3');

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

        DB::beginTransaction();
        $res = $case->editCase($inf['id'],$inf['title'],$inf['type'],$inf['content'],$inf['information'],$inf['area'],$picUrl1,$picUrl2,$picUrl3,$inf['price'],$inf['address']);

        if($res !== false && $bool1 && $bool2 && $bool3){
            $upRes = $case->upCaseAndDes($inf['id'],$inf['caseTeam']);
            if($upRes !== false){
                DB::commit();
                return response()->json('修改成功');
            }else{
                DB::rollBack();
                return response()->json('修改失败');
            }
        }else{
            DB::rollBack();
            return response()->json('修改失败！');
        }
    }

    /**删除单条案例
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delSingleCase(Request $request){
        $case = new CaseService();
        $ct = new CaseTeamDao();
        //获取传递过来的id
        $id = $request->get('id');

        DB::beginTransaction();
        $res = $case->del($id);

        //组合删除条件
        $con['case_id'] = $id;

        $delRes = $ct->del($con);

        if($res !== false && $delRes !== false){
            DB::commit();
            return response()->json('删除成功');
        }else{
            DB::rollBack();
            return response()->json('删除失败！');
        }
    }

    /**删除多条案例
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMoreCase(Request $request){
        $case = new CaseService();
        $ct = new CaseTeamDao();
        //获取传递过来的id
        $id = $request->get('ids');

        DB::beginTransaction();
        $res = $case->delMore($id);

        $delRes = $ct->delMoreByCase($id);
        if($res !== false && $delRes !== false){
            DB::commit();
            return response()->json('删除成功');
        }else{
            DB::rollBack();
            return response()->json('删除失败！');
        }
    }

    /**案例分类页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function type(){
        $case = new CaseService();
        //获取分类列表
        $type = $case->getAllType();
        //获取分类条数
        $num = count($type);
        return view('Admin.Case.type')
            ->with('list',$type)
            ->with('num',$num);
    }

    /**案例分类添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addType(){
        return view('Admin.Case.addType');
    }

    /**执行分类添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAddType(Request $request){
        $case = new CaseService();
        //获取传递过来的title和type
        $title = $request->get('title');
        $type = $request->get('type');

        //添加分类
        $addRes = $case->addType($title,$type);

        if($addRes !== false){
            return response()->json('添加成功');
        }else{
            return response()->json('添加失败！');
        }
    }

    /**删除单条分类
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delType(Request $request){
        $case = new CaseService();
        //获取传递过来的id
        $id = $request->get('id');

        $res = $case->delSingleType($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败,请检查该分类下是否存在对应内容！');
        }
    }

    /**删除多条分类
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMoreType(Request $request){
        $case = new CaseService();
        //获取传递过来的id
        $id = $request->get('ids');

        $res = $case->delMoreType($id);

        if($res !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败,请检查该分类下是否存在对应案例！');
        }
    }
}
