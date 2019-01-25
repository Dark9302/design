<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class CompanyDao extends Model
{
    protected $table = 'company';

    public $timestamps = false;

    /**获取公司基本信息
     * @return Model|null|static
     */
    public function getCompany(){
        return $this->first();
    }

    /**修改公司信息
     * @param array $con
     * @param array $data
     * @return bool
     */
    public function upCompany(array $con,array $data){
        return $this->where($con)->update($data);
    }

    /**获取公司基本信息
     * @return Model|null|static
     */
    public function getSingleCom(){
        return $this->select('name','address','phone','email',
            'web_title','web_keyword','web_description','web_copyright','web_icp','brief')->first();
    }

    /**获取文章简介
     * @return Model|null|static
     */
    public function getComInf(){
        return $this->select('brief')->first();
    }

    /**获取公司文化
     * @return Model|null|static
     */
    public function getComCulture(){
        return $this->select('culture')->first();
    }

    /**获取装修流程
     * @return Model|null|static
     */
    public function getProcess(){
        return $this->where('process')->first();
    }
}
