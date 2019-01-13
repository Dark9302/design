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
    //招聘
    Route::get('/job','IndexController@Job');
    //案例列表
    Route::get('/case','IndexController@CaseList');
    //案例详情
    Route::get('/caseInf','IndexController@CaseInf');
    //新闻资讯列表
    Route::get('/news','IndexController@NewsList');
    //新闻资讯详情
    Route::get('/newsInf','IndexController@NewsInf');
});