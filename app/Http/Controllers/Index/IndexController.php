<?php

namespace App\Http\Controllers\Index;

use App\Model\Dao\CaseTeamDao;
use App\Model\Dao\CompanyDao;
use App\Model\Dao\DictDictDao;
use App\Model\Dao\JobDao;
use App\Model\Service\ArticleService;
use App\Model\Service\CaseService;
use App\Model\Service\TeamService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $caseMenu;
    private $artMenu;
    private $com;
    public function __construct(){
        $dict = new CaseService();
        $company = new CompanyDao();

        //案例导航
        $this->caseMenu = $dict->getTypeList('1');
        //文章导航
        $this->artMenu = $dict->getTypeList('2');
        //公司基本信息
        $this->com = $company->getSingleCom();
    }

    /**前台主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index(){
        return view('Index.Index')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
	/**搜索页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(){
        return view('Index.Search')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**公司简介
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Company(){
        return view('Index.Company')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
	/**公司文化
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Cutural(){
        return view('Index.Cutural')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修流程
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Process(){
        return view('Index.Process')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**在线反馈
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FeedBack(){
        return view('Index.FeedBack')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(){
        return view('Index.Contact')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**地图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Map(){
        return view('Index.Map')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**装修案例列表
     * @param $type
     * @return $this
     */
    public function Product($type){
        $case = new CaseService();
        $caseRes = $case->getCaseListQt($type);

        return view('Index.ProductOs')
            ->with('list',$caseRes['list'])
            ->with('type',$caseRes['type'])
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**装修展示
     * @param $id
     * @return $this
     */
    public function ShowProduct($id){
        $case = new CaseService();
        $dict = new DictDictDao();
        $ct = new CaseTeamDao();
        //获取单个案例信息
        $caseInf = $case->getSingleCase($id);

        $type = $caseInf->type;

        //获取上一条和下一条
        $preAndNext = $case->getPreAndNext($id,$type);

        //获取类型信息
        $con['id'] = $type;
        $type = $dict->getSingleDict($con);

        //获取相关设计师
        $designer = $ct->getDesignerByCase($id);

        return view('Index.ShowProduct')
            ->with('inf',$caseInf)
            ->with('des',$designer)
            ->with('pre',$preAndNext['pre'])
            ->with('next',$preAndNext['next'])
            ->with('type',$type)
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修小常识
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Know(){
        return view('Index.Know')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activity(){
        return view('Index.Activity')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activityinf(){
        return view('Index.ActivityInf')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**设计团队
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Team(){
        $team = new TeamService();
        //获取设计师列表
        $list = $team->getDesList();

        return view('Index.Team')
            ->with('list',$list)
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**设计师详情
     * @param $id
     * @return $this
     */
    public function TeamInf($id){
        $team = new TeamService();
        $ct = new CaseTeamDao();
        //获取单个设计师
        $des = $team->getSingleDes($id);

        //获取设计师相关作品
        $case = $ct->getCaseByDes($id);

        //获取上一条和下一条
        $perAndNext = $team->getPreAndNext($id);

        return view('Index.TeamInf')
            ->with('des',$des)
            ->with('case',$case)
            ->with('per',$perAndNext['per'])
            ->with('next',$perAndNext['next'])
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**招聘
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Job(){
        $job = new JobDao();

        $list = $job->getJobList();
        return view('Index.Job')
            ->with('job',$list)
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**案例列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseList(){
        return view('Index.CaseList')
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**案例详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseInf(){
        return view('Index.CaseInf')
            ->with('com',$this->com)
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


        $con['id'] = $type;
        $type = $dict->getSingleDict($con);
        return view('Index.NewsList')
            ->with('list',$list)
            ->with('com',$this->com)
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


        $con['id'] = $inf->type;
        $type = $dict->getSingleDict($con);

        return view('Index.NewsInf')
            ->with('inf',$inf)
            ->with('pre',$preAndNext['pre'])
            ->with('next',$preAndNext['next'])
            ->with('com',$this->com)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu)
            ->with('typeName',$type->title)
            ->with('typeId',$type->id);
    }
}
