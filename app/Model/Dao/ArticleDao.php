<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticleDao extends Model
{
    //文章表
    protected $table = 'article';

    /**获取文章列表信息
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAdminArticleList(){
        return $this->select('id','title',
            DB::raw('date(FROM_UNIXTIME(time)) as time'),'looked')
            ->get();
    }

    /**文章添加
     * @param array $data
     * @return bool
     */
    public function addArticle(array $data){
        return $this->insert($data);
    }

    /**文章编辑
     * @param array $con
     * @param array $data
     * @return bool
     */
    public function editArticle(array $con,array $data){
        return $this->where($con)->update($data);
    }

    /**文章删除页面
     * @param array $con
     * @return bool|null
     */
    public function delArticle(array $con){
        return $this->where($con)->delete();
    }
}
