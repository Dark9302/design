<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class DictDictDao extends Model
{
    protected $table = 'dict_dict';

    public $timestamps = false;

    /**获取分类列表
     * @param array $con
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getDictList(array $con){
        return $this->where($con)
            ->get();
    }

    /**添加分类
     * @param array $data
     * @return bool
     */
    public function addDict(array $data){
        return $this->insert($data);
    }

    /**删除单条分类
     * @param array $con
     * @return bool|null
     */
    public function delDict(array $con){
        return $this->where($con)->delete();
    }

    /**删除多条分类
     * @param array $con
     * @return bool|null
     */
    public function delMoreDict(array $con){
        return $this->whereIn('id',$con)->delete();
    }
}
