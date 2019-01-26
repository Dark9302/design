<?php

namespace App\Http\Controllers\Admin;

use App\Model\Dao\JobDao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Queue\Jobs\JobName;

class JobController extends Controller
{
    /**获取招聘信息列表
     * @return $this
     */
    public function getJobList(){
        $job = new JobDao();

        $list = $job->getJobList();

        $num = count($list);
        return view('Admin.Job.index')
            ->with('list',$list)
            ->with('num',$num);
    }

    /**添加招聘信息
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function addJob(){
        return view('Admin.Job.add');
    }

    /**执行添加
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doAddJob(Request $request){
        $job = new JobDao();
        //获取传递过来的所有数据
        $inf=$request->all();

        //组合添加条件
        $data['position'] = $inf['position'];
        $data['number'] = $inf['number'];
        $data['address'] = $inf['address'];
        $data['salary'] = $inf['salary'];
        $data['email'] = $inf['email'];
        $data['qq'] = $inf['qq'];
        $data['infomation'] = $inf['infomation'];
        $data['time'] = time();

        $addRes = $job->addJob($data);

        if($addRes !== false){
            return response()->json('添加成功');
        }else{
            return response()->json('保存失败！');
        }
    }

    /**编辑招聘信息
     * @param $id
     * @return $this
     */
    public function editJob($id){
        $job = new JobDao();

        //组合查询条件
        $con['id'] = $id;

        $res = $job->getSignleJob($con);

        return view('Admin.Job.eidt')
            ->with('job',$res);
    }

    /**执行招聘信息修改
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doEditJob(Request $request){
        $job = new JobDao();
        //获取传递过来的信息
        $inf = $request->all();

        //组合查询条件和更新条件
        $con['id'] = $inf['id'];
        $data['position'] = $inf['position'];
        $data['number'] = $inf['number'];
        $data['address'] = $inf['address'];
        $data['salary'] = $inf['salary'];
        $data['email'] = $inf['email'];
        $data['qq'] = $inf['qq'];
        $data['infomation'] = $inf['infomation'];

        $res = $job->editJob($con,$data);

        if($res!==false){
            return response()->json('修改成功');
        }else{
            return response()->json('更新失败！');
        }
    }

    /**删除单条招聘信息
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delJob(Request $request){
        $job = new JobDao();

        //获取传递过来的信息
        $id = $request->get('id');

        $con['id'] = $id;

        $delRes = $job->delJob($con);

        if($delRes !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }

    /**删除多条招聘信息
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function delMoreJob(Request $request){
        $job = new JobDao();

        //获取传递过来的信息
        $id = $request->get('ids');


        $delRes = $job->delMoreJob($id);

        if($delRes !== false){
            return response()->json('删除成功');
        }else{
            return response()->json('删除失败！');
        }
    }
}
