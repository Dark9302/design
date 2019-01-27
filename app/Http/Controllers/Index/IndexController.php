<?php

namespace App\Http\Controllers\Index;

use App\Model\Dao\CaseDao;
use App\Model\Dao\CaseTeamDao;
use App\Model\Dao\CompanyDao;
use App\Model\Dao\CustomerDao;
use App\Model\Dao\DictDictDao;
use App\Model\Dao\JobDao;
use App\Model\Dao\PictureDao;
use App\Model\Dao\ServiceDao;
use App\Model\Dao\TeamDao;
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
    private $caseDb;
    private $artDb;
    private $artBt;
    private $caseBt;
    public function __construct(){
        $company = new CompanyDao();
        $this->caseDb = new CaseService();
        $this->artDb = new ArticleService();

        //案例导航
        $this->caseMenu = $this->caseDb->getTypeList('1');
        //文章导航
        $this->artMenu = $this->caseDb->getTypeList('2');
        //公司基本信息
        $this->com = $company->getSingleCom();
        //底部新闻
        $this->artBt = $this->artDb->getTopN('5');
        //底部案例
        $this->caseBt = $this->caseDb->getTopN('9');
    }

    /**前台主页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Index(){
        //首页幻灯片
        $pic = new PictureDao();
        $case = new CaseDao();
        $hdp = $pic->getPicList();
        //我们的服务
        $ser = new ServiceDao();
        $service = $ser->getServiceList();

        //获取案例分类
        $dict = new DictDictDao();

        $con['type'] = '1';
        $caseType = $dict->getDictList($con);

        //获取案例列表
        $caseList = $case->getQtCaseList();

        //获取文章
        $indexArt = $this->artDb->getTopN('3');
        //获取首页活动
        $active = $this->artDb->getActive();

        $team = new TeamService();

        $teamList = $team->getDesList();

        return view('Index.Index')
            ->with('pic',$hdp)
            ->with('active',$active)
            ->with('ser',$service)
            ->with('caseType',$caseType)
            ->with('caseList',$caseList)
            ->with('artList',$indexArt)
            ->with('teamList',$teamList)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**搜索页面
     * @param Request $request
     * @return mixed
     */
    public function search(Request $request){
        //获取传递过来数据
        $inf = $request->all();

        $list = $this->artDb->searchArt($inf['val']);

        return view('Index.Search')
            ->with('res',$list)
            ->with('value',$inf['val'])
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**公司简介
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Company(){
        $com = new CompanyDao();

        $inf = $com->getComInf();

        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Company')
            ->with('inf',$inf)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
	/**公司文化
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Cutural(){
        $com = new CompanyDao();

        $cul = $com->getComCulture();

        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Cutural')
            ->with('cul',$cul)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修流程
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Process(){
        $com = new CompanyDao();

        $pro = $com->getProcess();

        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Process')
            ->with('pro',$pro)
            ->with('com',$this->com)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**在线反馈
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FeedBack(){
        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.FeedBack')
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**联系我们
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(){
        $com = new CompanyDao();

        $inf = $com->getSingleCom();

        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Contact')
            ->with('inf',$inf)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**地图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Map(){
        return view('Index.Map')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**装修案例列表
     * @param $type
     * @return $this
     */
    public function Product($type){
        $caseRes = $this->caseDb->getCaseListQt($type);

        $topCase = $this->caseDb->getTopNByType('3',$type);
        $topArt = $this->artDb->getTopN('5');
        return view('Index.ProductOs')
            ->with('list',$caseRes['list'])
            ->with('type',$caseRes['type'])
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
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
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**装修小常识
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Know(){
        return view('Index.Know')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activity(){
        return view('Index.Activity')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**项目活动详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activityinf(){
        return view('Index.ActivityInf')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**设计团队
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Team(){
        $team = new TeamDao();
        //获取设计师列表
        $list = $team->getDesignerListPage();

        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Team')
            ->with('list',$list)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
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
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**招聘
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Job(){
        $job = new JobDao();

        $list = $job->getJobListPage();
        //获取推荐信息
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopN('5');
        return view('Index.Job')
            ->with('job',$list)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }
    /**案例列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseList(){
        return view('Index.CaseList')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**案例详情
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function CaseInf(){
        return view('Index.CaseInf')
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu);
    }

    /**新闻列表
     * @param string $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsList($type){
        $dict = new DictDictDao();

        $list = $this->artDb->getArticleList($type);

        //获取推荐
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopNByType('5',$type);

        $con['id'] = $type;
        $type = $dict->getSingleDict($con);
        return view('Index.NewsList')
            ->with('list',$list)
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
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

        //获取推荐
        $topCase = $this->caseDb->getTopN('3');
        $topArt = $this->artDb->getTopNByType('5',$inf->type);

        return view('Index.NewsInf')
            ->with('inf',$inf)
            ->with('pre',$preAndNext['pre'])
            ->with('next',$preAndNext['next'])
            ->with('topCase',$topCase)
            ->with('topArt',$topArt)
            ->with('com',$this->com)
            ->with('artBt',$this->artBt)
            ->with('caseBt',$this->caseBt)
            ->with('caseMenu',$this->caseMenu)
            ->with('artMenu',$this->artMenu)
            ->with('typeName',$type->title)
            ->with('typeId',$type->id);
    }

    /**添加用户反馈
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addCus(Request $request){
        $cus = new CustomerDao();

        $inf=$request->all();
        //组合添加条件

        $data['name'] = $inf['name'];
        $data['phone'] = $inf['phone'];
        $data['mark'] = $inf['mark'];
        $data['time'] = time();
        $res = $cus->addCus($data);

        if($res !== false){
            return response()->json('添加成功');
        }else{
            return response()->json('操作失败！');
        }
    }
}
