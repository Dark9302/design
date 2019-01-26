<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class ServiceDao extends Model
{
    protected $table = 'service';

    public $timestamps = false;

    public function getServiceList(){
        return $this->first();
    }

    public function upService(array $con,array $data){
        return $this->where($con)->update($data);
    }
}
