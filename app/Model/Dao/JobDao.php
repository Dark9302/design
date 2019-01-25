<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JobDao extends Model
{
    protected $table = 'job';

    public $timestamps = false;

    /**获取招聘信息列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getJobList(){
        return $this->select('id','position','number','address',
            'salary','email','qq','infomation',
            DB::raw('date(FROM_UNIXTIME(time)) as time'))
            ->orderBy('time','desc')
            ->get();
    }

    /**获取单条招聘信息
     * @param array $con
     * @return Model|null|static
     */
    public function getSignleJob(array $con){
        return $this->select('id','position','number','address',
            'salary','email','qq','infomation',
            DB::raw('date(FROM_UNIXTIME(time)) as time'))
            ->orderBy('time','desc')
            ->first();
    }
    /**添加招聘信息
     * @param array $data
     * @return bool
     */
    public function addJob(array $data){
        return $this->insert($data);
    }

    /**修改招聘信息
     * @param array $con
     * @param array $data
     * @return bool
     */
    public function editJob(array $con,array $data){
        return $this->where($con)
            ->update($data);
    }

    /**删除招聘信息
     * @param array $con
     * @return bool|null
     */
    public function delJob(array $con){
        return $this->where($con)->delete();
    }

    /**删除多条招聘信息
     * @param array $ids
     * @return bool|null
     */
    public function delMoreJob(array $ids){
        return $this->whereIn('id',$ids)->delete();
    }
}
