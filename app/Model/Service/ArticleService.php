<?php

namespace App\Model\Service;

use App\Model\Dao\ArticleDao;
use Illuminate\Database\Eloquent\Model;

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

    /**文章添加
     * @param $title
     * @param $content
     * @param $type
     * @return bool
     */
    public function addArticle($title,$content,$type){
        $article = new ArticleDao();
        //组合添加条件
        $data['title'] = $title;
        $data['content'] = $content;
        $data['type'] = $type;
        $data['time'] = time();

        $addRes = $article->addArticle($data);

        return $addRes;
    }
}
