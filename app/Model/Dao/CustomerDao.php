<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerDao extends Model
{
    protected $table = 'customer';

    /**获取反馈列表内容
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getCusList(){
        return $this->select('id','name','phone',
            DB::raw('date(FROM_UNIXTIME(time)) as time'),'mark')
            ->get();
    }

    /**添加记录
     * @param array $data
     * @return bool
     */
    public function addCus(array $data){
        return $this->insert($data);
    }
}
