<?php

namespace App\Model\Service;

use App\Model\Dao\CaseDao;
use App\Model\Dao\DictDictDao;
use Illuminate\Database\Eloquent\Model;

class CaseService extends Model
{
    /**获取案例列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCaseList(){
        $case = new CaseDao();

        $list = $case->getCaseList();

        return $list;
    }

    /**获取单个案例
     * @param $id
     * @return Model|null|static
     */
    public function getSingleCase($id){
        $case = new CaseDao();

        //组合查询条件
        $con['id'] = $id;

        $res = $case->getSingleCase($con);

        return $res;
    }

    /**添加案例
     * @param $title
     * @param $type
     * @param $content
     * @param $information
     * @param $area
     * @param $pic1
     * @param $pic2
     * @param $pic3
     * @return bool
     */
    public function addCase($title,$type,$content,$information,$area,$pic1,$pic2,$pic3){
        $case = new CaseDao();
        //组合添加条件
        $data['title'] = $title;
        $data['type'] = $type;
        $data['content'] = $content;
        $data['information'] = $information;
        $data['area'] = $area;
        $data['pic1'] = $pic1;
        $data['pic2'] = $pic2;
        $data['pic3'] = $pic3;

        $addRes = $case->addCase($data);

        return $addRes;
    }

    /**编辑案例
     * @param $id
     * @param $title
     * @param $type
     * @param $content
     * @param $information
     * @param $area
     * @param $pic1
     * @param $pic2
     * @param $pic3
     * @return bool
     */
    public function editCase($id,$title,$type,$content,$information,$area,$pic1,$pic2,$pic3){
        $case = new CaseDao();
        //组合添加条件
        $con['id'] = $id;
        $data['title'] = $title;
        $data['type'] = $type;
        $data['content'] = $content;
        $data['information'] = $information;
        $data['area'] = $area;
        if($pic1){
            $data['pic1'] = $pic1;
        }
        if($pic2){
            $data['pic2'] = $pic2;
        }
        if($pic3){
            $data['pic3'] = $pic3;
        }

        $upRes = $case->upCase($con,$data);

        return $upRes;
    }

    /**删除单条案例
     * @param $id
     * @return bool|null
     */
    public function del($id){
        $case = new CaseDao();
        //组合删除条件
        $con['id'] = $id;
        $del = $case->delCase($con);

        return $del;
    }

    /**删除多条案例
     * @param array $data
     * @return bool|null
     */
    public function delMore(array $data){
        $case = new CaseDao();

        $del = $case->delMoreCase($data);

        return $del;
    }


    /**********************分类***************************/
    /**分类列表
     * @param $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTypeList($type){
        $dict = new DictDictDao();

        //组合查询条件
        $con['type'] = $type;
        $res = $dict->getDictList($con);

        return $res;
    }

    /**添加分类
     * @param $title
     * @param $type
     * @return bool
     */
    public function addType($title,$type){
        $dict = new DictDictDao();

        //组合添加条件
        $data['title'] = $title;
        $data['type'] = $type;

        $res = $dict->addDict($data);

        return $res;
    }

    /**删除分类
     * @param $id
     * @return bool|null
     */
    public function delSingleType($id){
        $dict = new DictDictDao();
        $case = new CaseDao();

        //组合删除条件
        $con['id'] = $id;

        //判断该类型下是否有对应案例
        $case = $case->getSingleCase($con);
        if($case){
            $delRes = false;
        }else{
            $delRes = $dict->delDict($con);
        }

        return $delRes;
    }

    /**批量删除分类
     * @param array $data
     * @return bool|null
     */
    public function delMoreType(array $data){
        $dict = new DictDictDao();
        $case = new CaseDao();

        //判断该类型下是否有对应案例
        $case = $case->getMoreCase($data);
        if($case->isEmpty()){
            $delRes = $dict->delMoreDict($data);
        }else{
            $delRes = false;
        }

        return $delRes;
    }
}
