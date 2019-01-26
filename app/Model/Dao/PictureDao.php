<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class PictureDao extends Model
{
    protected $table = 'picture';

    public $timestamps = false;

    public function getPicList(){
        return $this->get();
    }

    public function getSinglePic(array $con){
        return $this->where($con)->first();
    }

    public function addPic(array $data){
        return $this->insert($data);
    }

    public function upPic(array $con,array $data){
        return $this->where($con)->update($data);
    }

    public function delPic(array $con){
        return $this->where($con)->delete();
    }

    public function delMorePic(array $con){
        return $this->whereIn('id',$con)->delete();
    }
}
