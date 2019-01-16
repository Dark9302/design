<?php

namespace App\Model\Service;

use App\Model\Dao\ArticleDao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class ArticleService extends Model
{
    /**获取后台文章列表
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAdminArticleList(){
        $article = new ArticleDao();
        $list = $article->getAdminArticleList();
        return $list;
    }

    /**获取前台文章列表
     * @param string $type
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getArticleList($type = ''){
        $article = new ArticleDao();
        if($type){
            //组合查询条件
            $con['type'] = $type;
            $list = $article->getTypeArticle($con);
        }else{
            $list = $article->getArticleList();
        }

        return $list;
    }

    /**文章添加
     * @param $title
     * @param $intr
     * @param $content
     * @param $type
     * @return bool
     */
    public function addArticle($title,$intr,$content,$type){
        $article = new ArticleDao();
        //组合添加条件
        $data['title'] = $title;
        $data['introduction'] = $intr;
        $data['content'] = $content;
        $data['type'] = $type;
        $data['time'] = time();

        $addRes = $article->addArticle($data);

        return $addRes;
    }

    /**获取单条文章信息
     * @param $id
     * @return Model|null|static
     */
    public function getSingleArticle($id){
        $article = new ArticleDao();

        //组合查询条件
        $con['id'] = $id;

        $artRes = $article->getSingleArticle($con);

        return $artRes;
    }

    /**文章编辑
     * @param $id
     * @param $title
     * @param $intr
     * @param $content
     * @param $type
     * @return bool
     */
    public function editArticle($id,$title,$intr,$content,$type){
        $article = new ArticleDao();

        //组合更新条件
        $con['id'] = $id;
        $data['title'] = $title;
        $data['introduction'] = $intr;
        $data['content'] = $content;
        $data['type'] = $type;
        $data['time'] = time();

        $upRes = $article->editArticle($con,$data);

        return $upRes;
    }

    /**删除单条文章
     * @param $id
     * @return bool|null
     */
    public function delSingle($id){
        $article = new ArticleDao();

        //组合删除条件
        $con['id'] = $id;
        $delRes = $article->delArticle($con);

        return $delRes;
    }

    /**删除多条记录
     * @param array $data
     * @return bool|null
     */
    public function delMore(array $data){
        $article = new ArticleDao();

        $delRes = $article->delMoreArticle($data);

        return $delRes;
    }
}
