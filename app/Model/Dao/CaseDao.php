<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class CaseDao extends Model
{
    protected $table = 'case';

    public $timestamps = false;

    /**获取单条案例
     * @param array $con
     * @return Model|null|static
     */
    public function getSingleCase(array $con){
        return $this->where($con)->first();
    }

    /**获取多条案例
     * @param array $con
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getMoreCase(array $con){
        return $this->whereIn('id',$con)->get();
    }

    /**获取案例列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCaseList(){
        return $this->select('case.id','case.title','dict_dict.title as type_name','case.content','area','recommend')
            ->join('dict_dict','dict_dict.id','=','case.type')
            ->orderBy('case.id')
            ->get();
    }

    /**添加案例
     * @param array $data
     * @return int
     */
    public function addCase(array $data){
        return $this->insertGetId($data);
    }

    /**更新案例
     * @param array $con
     * @param array $data
     * @return bool
     */
    public function upCase(array $con,array $data){
        return $this->where($con)->update($data);
    }

    /**删除单条案例
     * @param array $con
     * @return bool|null
     */
    public function delCase(array $con){
        return $this->where($con)->delete();
    }

    /**删除多条案例
     * @param array $con
     * @return bool|null
     */
    public function delMoreCase(array $con){
        return $this->whereIn('id',$con)->delete();
    }

    /**上一条
     * @param $id
     * @param $type
     * @return Model|null|static
     */
    public function perOne($id,$type){
        return $this->select('id','title')
            ->where('id','<',$id)
            ->where('type','=',$type)
            ->orderBy('id','desc')->limit('1')
            ->first();
    }

    /**一下条
     * @param $id
     * @param $type
     * @return Model|null|static
     */
    public function nextOne($id,$type){
        return $this->select('id','title')
            ->where('id','>',$id)
            ->where('type','=',$type)
            ->orderBy('id')->limit('1')
            ->first();
    }

    /**获取top3
     * @param $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTopThree($type){
        return $this->select('id','title')
            ->where('type','=',$type)
            ->where('recommend','=','1')
            ->orderBy('id','desc')
            ->limit('3')
            ->get();
    }

    /**获取top9
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTopNine(){
        return $this->select('id','title')
            ->where('recommend','=','1')
            ->orderBy('id','desc')
            ->limit('9')
            ->get();
    }
}
