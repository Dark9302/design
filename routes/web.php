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