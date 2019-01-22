<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class CaseTeamDao extends Model
{
    protected $table = 'case_team';

    public $timestamps = false;

    /**添加记录
     * @param array $data
     * @return bool
     */
    public function add(array $data){
        return $this->insert($data);
    }

    /**删除记录
     * @param array $con
     * @return bool|null
     */
    public function del(array $con){
        return $this->where($con)->delete();
    }

    /**获取记录
     * @param array $con
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getInf(array $con){
        return $this->where($con)->orderBy('id')->get();
    }
}
