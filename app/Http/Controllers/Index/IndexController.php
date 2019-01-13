<?php

namespace App\Http\Controllers\Index;

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

    /**公司新闻列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsList(){
        return view('Index.NewsList');
    }

    /**公司新闻详情列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function NewsInf(){
        return view('Index.NewsInf');
    }

    /**在线反馈
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function FeedBack(){
        return view('Index.FeedBack');
    }

    /**联系我们页面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Contact(){
        return view('Index.Contact');
    }
}
