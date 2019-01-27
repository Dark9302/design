<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class TeamDao extends Model
{
    protected $table = 'team';

    public $timestamps = false;

    /**获取设计师列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDesignerList(){
        return $this->get();
    }

    public function getDesignerListPage(){
        return $this->paginate(9);
    }

    /**获取单个设计师信息
     * @param array $con
     * @return Model|null|static
     */
    public function getSingleDesigner(array $con){
        return $this->where($con)->first();
    }

    public function addDesigner(array $data){
        return $this->insert($data);
    }

    public function editDesigner(array $con,array $data){
        return $this->where($con)->update($data);
    }

    public function delDesigner(array $con){
        return $this->where($con)->delete();
    }

    public function delMoreDesigner(array $data){
        return $this->whereIn('id',$data)->delete();
    }

    /**上一条
     * @param $id
     * @return Model|null|static
     */
    public function perOne($id){
        return $this->select('id','name')
            ->where('id','<',$id)
            ->orderBy('id','desc')->limit('1')
            ->first();
    }

    /**下一条
     * @param $id
     * @return Model|null|static
     */
    public function nextOne($id){
        return $this->select('id','name')
            ->where('id','>',$id)
            ->orderBy('id')->limit('1')
            ->first();
    }
}
