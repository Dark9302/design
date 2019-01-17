<?php

namespace App\Model\Service;

use App\Model\Dao\DictDictDao;
use Illuminate\Database\Eloquent\Model;

class CaseService extends Model
{
    public function getCaseList(){

    }

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

        //组合删除条件
        $con['id'] = $id;

        $delRes = $dict->delDict($con);

        return $delRes;
    }

    /**批量删除分类
     * @param array $data
     * @return bool|null
     */
    public function delMoreType(array $data){
        $dict = new DictDictDao();

        $delRes = $dict->delMoreDict($data);

        return $delRes;
    }
}
