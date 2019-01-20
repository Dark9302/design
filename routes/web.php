<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**后台管理页面**/
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function (){
    //后台登录页面
    Route::get('/','AdminController@login');
    //后台主页面
    Route::post('index','AdminController@index');
    //后台欢迎页面
    Route::get('welcome','AdminController@welcome');
    //公司信息页面
    Route::get('company','AdminController@companyInf');
    //文章信息页面
    Route::get('article','ArticleController@index');
    //文章添加页面
    Route::get('addArticle','ArticleController@add');
    //执行文章添加
    Route::post('doAddArticle','ArticleController@doAdd');
    //文章编辑页面
    Route::get('editArticle/{id}','ArticleController@edit');
    //执行文章编辑
    Route::post('doEdit','ArticleController@doEdit');
    //删除单条文章
    Route::post('delArticle','ArticleController@delSingleArticle');
    //删除多条文章
    Route::post('delMoreArticle','ArticleController@delMoreArticle');
    //案例信息页面
    Route::get('case','CaseController@index');
    //案例添加页面
    Route::get('addCase','CaseController@add');
    //案例添加选择设计师
    Route::get('selectDes','CaseController@selectDesigner');
    //执行案例添加页面
    Route::post('doAddCase','CaseController@doAdd');
    //案例编辑页面
    Route::get('editCase/{id}','CaseController@edit');
    //执行案例编辑
    Route::post('doEditCase','CaseController@doEdit');
    //删除单条案例
    Route::post('delCase','CaseController@delSingleCase');
    //删除多条案例
    Route::post('delMoreCase','CaseController@delMoreCase');
    //分类页面
    Route::get('type','CaseController@type');
    //分类添加页面
    Route::get('addType','CaseController@addType');
    //执行分类添加
    Route::post('doAddType','CaseController@doAddType');
    //删除单条分类
    Route::post('delType','CaseController@delType');
    //删除多条分类
    Route::post('delMoreType','CaseController@delMoreType');
    //设计师页面
    Route::get('designer','DesignerController@index');
    //设计师添加页面
    Route::get('addDesigner','DesignerController@add');
    //执行设计师添加
    Route::post('doAddDesigner','DesignerController@doAdd');
    //设计师编辑页面
    Route::get('editDesigner/{id}','DesignerController@edit');
    //执行设计师编辑页面
    Route::post('doEditDesigner','DesignerController@doEdit');
    //删除设计师
    Route::post('delDes','DesignerController@delSingleDes');
    //删除多个设计师
    Route::post('delMoreDes','DesignerController@delMoreDes');
});
/**前台页面**/
Route::group(['namespace'=>'Index'],function (){
    //前台主页
    Route::get('/','IndexController@Index');
    //公司简介
    Route::get('/company','IndexController@Company');
    //公司文化
    Route::get('/cutural','IndexController@Cutural');
    //在线反馈
    Route::get('/feedback','IndexController@FeedBack');
    //联系我们
    Route::get('/contact','IndexController@Contact');
     //地图
    Route::get('/map','IndexController@Map');
     //欧式装修
    Route::get('/productos','IndexController@ProductOs');
     //中式装修
    Route::get('/productzs','IndexController@ProductZs');
     //精装装修
    Route::get('/productjz','IndexController@ProductJz');
     //简装装修
    Route::get('/productjian','IndexController@ProductJian');
     //装修展示
    Route::get('/showproduct','IndexController@ShowProduct');
     //装修小常识
    Route::get('/know','IndexController@Know');
    //设计团队
    Route::get('/team','IndexController@Team');
    //设计师详情
    Route::get('/teaminf','IndexController@TeamInf');
    //招聘
    Route::get('/job','IndexController@Job');
    //案例列表
    Route::get('/case','IndexController@CaseList');
    //案例详情
    Route::get('/caseInf','IndexController@CaseInf');
    //新闻资讯列表
    Route::get('/news/{type?}','IndexController@NewsList');
    //新闻资讯详情
    Route::get('/newsInf/{id}','IndexController@NewsInf');
});