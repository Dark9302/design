<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;

class AdminDao extends Model
{
    protected $table = 'admin';

    public function getAdmin(array $con){
        return $this->where($con)->first();
    }
}
