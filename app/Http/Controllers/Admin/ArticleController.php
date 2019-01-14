<?php

namespace App\Http\Controllers\Admin;

use App\Model\Service\ArticleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**文章主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $article = new ArticleService();
        //获取文章列表
        $artList = $article->getAdminArticleList();
        //获取文章数量
        $num = count($artList);

        return view('Admin.Article.Index')
            ->with('list',$artList)
            ->with('num',$num);
    }

    /**文章添加页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(){
        return view('Admin.Article.add');
    }


    public function doAdd(Request $request){
        $article = new ArticleService();
        //获取传递过来的输入内容
        $inf = $request->all();

        $addRes = $article->addArticle($inf['title'],$inf['content'],$inf['type']);

        if($addRes !== false){
            return response()->json('添加成功');
        }else{
            return response()->json('添加失败！');
        }
    }

    public function edit(){

    }
}
