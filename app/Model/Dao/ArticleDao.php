<?php

namespace App\Model\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArticleDao extends Model
{
    //文章表
    protected $table = 'article';

    //去除自动维护
    public $timestamps;
    /**获取文章列表信息
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAdminArticleList(){
        return $this->select('id','title','type',
            DB::raw('date(FROM_UNIXTIME(time)) as time'),'looked')
            ->get();
    }

    /**获取前台所有文章
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getArticleList(){
        return $this->whereIn('type',[1,2])
            ->select('id','title','content','type','introduction',
            DB::raw('date(FROM_UNIXTIME(time)) as time'),'looked')
            ->get();
    }

    /**获取前台文章
     * @param array $con
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getTypeArticle(array $con){
        return $this->where($con)
            ->select('id','title','content','type','introduction',
            DB::raw('date(FROM_UNIXTIME(time)) as time'),'looked')
            ->get();
    }
    /**获取单条文章
     * @param array $con
     * @return Model|null|static
     */
    public function getSingleArticle(array $con){
        return $this->where($con)->first();
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

    /**删除多条记录
     * @param array $con
     * @return bool|null
     */
    public function delMoreArticle(array $con){
        return $this->whereIn('id',$con)->delete();
    }
}
