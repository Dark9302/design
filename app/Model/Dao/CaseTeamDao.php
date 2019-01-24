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

    /**获取设计师对应案例
     * @param $desId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCaseByDes($desId){
        return $this->select('case.id','case.title','case.pic1')
            ->where('team_id','=',$desId)
            ->join('case','case_id','=','case.id')
            ->join('team','team_id','=','team.id')
            ->get();
    }

    /**获取案例对应设计师
     * @param $caseId
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDesignerByCase($caseId){
        return $this->select('team.id','team.name','team.photo')
            ->where('case_id','=',$caseId)
            ->join('case','case_id','=','case.id')
            ->join('team','team_id','=','team.id')
            ->get();
    }
}
