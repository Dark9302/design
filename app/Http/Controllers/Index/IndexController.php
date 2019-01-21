<?php

namespace App\Http\Controllers\Index;

use App\Model\Dao\DictDictDao;
use App\Model\Service\ArticleService;
use App\Model\Service\CaseService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $caseMenu;
    private $artMenu;
    public function __construct(){
        $dict = new CaseService();

        //案例导航
        $this->caseMenu = $dict->getTypeList('1');
        //文章导航
        $this->artMenu = $dict->getTypeList('2');
    }

    /**前台主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index(){
        return view('Index.Index')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
	/**搜索页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(){
        return view('Index.Search')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**公司简介
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Company(){
        return view('Index.Company')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
	/**公司文化
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Cutural(){
        return view('Index.Cutural')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修流程
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Process(){
        return view('Index.Process')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**在线反馈
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FeedBack(){
        return view('Index.FeedBack')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(){
        return view('Index.Contact')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**地图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Map(){
        return view('Index.Map')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**欧式装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductOs(){
        return view('Index.ProductOs')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**中式装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductZs(){
        return view('Index.ProductZs')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**精装装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductJz(){
        return view('Index.ProductJz')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**简装装修
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ProductJian(){
        return view('Index.ProductJian')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function ShowProduct(){
        return view('Index.ShowProduct')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修小常识
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Know(){
        return view('Index.Know')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activity(){
        return view('Index.Activity')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activityinf(){
        return view('Index.ActivityInf')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**设计团队
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Team(){
        return view('Index.Team')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**设计师详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function TeamInf(){
        return view('Index.TeamInf')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**招聘
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Job(){
        return view('Index.Job')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**案例列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseList(){
        return view('Index.CaseList')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**案例详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseInf(){
        return view('Index.CaseInf')
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**新闻列表
     * @param string $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsList($type){
        $article = new ArticleService();
        $dict = new DictDictDao();

        $list = $article->getArticleList($type);

        //文章推荐
        $topFive = $article->getTopFive();

        $con['id'] = $type;
        $type = $dict->getSingleDict($con);
        return view('Index.NewsList')
            ->with('topFive',$topFive)
            ->with('list',$list)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu)
            ->with('typeName',$type->title)
            ->with('typeId',$type->id);
    }

    /**公司新闻详情列表
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsInf($id){
        $article = new ArticleService();
        $dict = new DictDictDao();

        //浏览次数加一
        $article->addOne($id);
        //获取文章详情
        $inf = $article->getSingleArticle($id);

        //上一条和下一条
        $preAndNext = $article->getPreAndNext($id,$inf->type);

        //文章推荐
        $topFive = $article->getTopFive();

        $con['id'] = $inf->type;
        $type = $dict->getSingleDict($con);

        return view('Index.NewsInf')
            ->with('inf',$inf)->with('topFive',$topFive)
            ->with('pre',$preAndNext['pre'])
            ->with('next',$preAndNext['next'])
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu)
            ->with('typeName',$type->title)
            ->with('typeId',$type->id);
    }
}
