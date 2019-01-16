<?php

namespace App\Http\Controllers\Index;

use App\Model\Service\ArticleService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**前台主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index(){
        return view('Index.Index');
    }

    /**公司简介
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Company(){
        return view('Index.Company');
    }
	/**公司文化
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Cutural(){
        return view('Index.Cutural');
    }
    /**在线反馈
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FeedBack(){
        return view('Index.FeedBack');
    }
    /**联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(){
        return view('Index.Contact');
    }
    /**地图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Map(){
        return view('Index.Map');
    }
    /**欧式装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductOs(){
        return view('Index.ProductOs');
    }
    /**中式装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductZs(){
        return view('Index.ProductZs');
    }
    /**精装装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductJz(){
        return view('Index.ProductJz');
    }
    /**简装装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductJian(){
        return view('Index.ProductJian');
    }
    /**装修展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ShowProduct(){
        return view('Index.ShowProduct');
    }
    /**装修小常识
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Know(){
        return view('Index.Know');
    }
    /**设计团队
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Team(){
        return view('Index.Team');
    }
    /**招聘
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Job(){
        return view('Index.Job');
    }
    /**案例列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseList(){
        return view('Index.CaseList');
    }

    /**案例详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseInf(){
        return view('Index.CaseInf');
    }

    /**新闻列表
     * @param string $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsList($type = ''){
        $article = new ArticleService();

        $list = $article->getArticleList($type);

        //文章推荐
        $topFive = $article->getTopFive();

        return view('Index.NewsList')
            ->with('topFive',$topFive)
            ->with('list',$list);
    }

    /**公司新闻详情列表
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsInf($id){
        $article = new ArticleService();

        //浏览次数加一
        $article->addOne($id);
        //获取文章详情
        $inf = $article->getSingleArticle($id);

        //上一条和下一条
        $preAndNext = $article->getPreAndNext($id,$inf->type);

        //文章推荐
        $topFive = $article->getTopFive();

        return view('Index.NewsInf')
            ->with('inf',$inf)->with('topFive',$topFive)
            ->with('pre',$preAndNext['pre'])
            ->with('next',$preAndNext['next']);
    }
}
