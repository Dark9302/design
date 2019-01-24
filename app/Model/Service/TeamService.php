<?php

namespace App\Model\Service;

use App\Model\Dao\TeamDao;
use Illuminate\Database\Eloquent\Model;

class TeamService extends Model
{
    /**获取设计师列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDesList(){
        $des = new TeamDao();

        $list = $des->getDesignerList();

        return $list;
    }

    /**获取单个设计师
     * @param $id
     * @return Model|null|static
     */
    public function getSingleDes($id){
        $des = new TeamDao();

        //组合查询条件
        $con['id'] = $id;
        $res = $des->getSingleDesigner($con);

        return $res;
    }

    /**添加设计师
     * @param $name
     * @param $post
     * @param $year
     * @param $brief
     * @param $photo
     * @param $concept
     * @param $style
     * @return bool
     */
    public function addDes($name,$post,$year,$brief,$photo,$concept,$style){
        $des = new TeamDao();
        //组合添加条件
        $data['name'] = $name;
        $data['post'] = $post;
        $data['work_year'] = $year;
        $data['brief'] = $brief;
        $data['photo'] = $photo;
        $data['design_concept'] = $concept;
        $data['style'] = $style;

        $addRes = $des->addDesigner($data);

        return $addRes;
    }

    /**设计师信息编辑
     * @param $id
     * @param $name
     * @param $post
     * @param $year
     * @param $brief
     * @param $photo
     * @param $concept
     * @param $style
     * @return bool
     */
    public function editDesign($id,$name,$post,$year,$brief,$photo,$concept,$style){
        $des = new TeamDao();
        //组合添加条件
        $con['id'] = $id;
        $data['name'] = $name;
        $data['post'] = $post;
        $data['work_year'] = $year;
        $data['brief'] = $brief;
        if($photo){
            $data['photo'] = $photo;
        }
        $data['design_concept'] = $concept;
        $data['style'] = $style;

        $upRes = $des->editDesigner($con,$data);

        return $upRes;
    }

    /**删除设计师
     * @param $id
     * @return bool|null
     */
    public function delDes($id){
        $des = new TeamDao();
        //组合删除
        $con['id'] = $id;

        $delRes = $des->delDesigner($con);

        return $delRes;
    }

    /**批量删除设计师
     * @param array $data
     * @return bool|null
     */
    public function delMoreDes(array $data){
        $des = new TeamDao();

        $delRes = $des->delMoreDesigner($data);

        return $delRes;
    }

    /**上一条和下一条
     * @param $id
     * @return array
     */
    public function getPreAndNext($id){
        $des = new TeamDao();

        $per = $des->perOne($id);

        $next = $des->nextOne($id);

        return array('per'=>$per,'next'=>$next);
    }
}
