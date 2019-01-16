@extends('Index.RightBase')
@section('css')
    @parent
@endsection
@section('content')
    <div class="met-banner-econy" style="background-color:;">
        <img src="upload/1474296568.jpg">
        <div class="econynr">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>公司新闻</h1>
                    </div>
                    <div class="breadcumb">
                        <i class="fa fa-home"></i> <a href="index.html" title="首页">首页</a> &gt; <a href="news.html">新闻资讯</a> > <a href="news.html">公司新闻</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="met-news animsition">
        <div class="container">
            <div class="row">
                <div class="col-md-9 met-news-body">
                    <div class="row">
                        <div class="met-news-list">
                            <ul class="met-page-ajax">
                                @foreach($list as $val)
                                    <li>
                                        <h4>
                                            <a href="{{url('newsInf')}}" title="{{$val->title}}" target='_self'>{{$val->title}}</a>
                                        </h4>
                                        <p class="des">{{$val->introduction}}</p>
                                        <p class="info">
                                            <span>{{$val->time}}</span>
                                            <span class="margin-left-10"><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{{$val->looked}}</span>
                                        </p>
                                    </li>
                                @endforeach
                            </ul>
                            <div>
                                <div class='met_pager'>
                                    <span class='PreSpan'>上一页</span><a href=news.html?lang=cn&class1=2&class2=11 class='Ahover'>1</a><a href=news.html?lang=cn&class1=2&class2=11&page=2>2</a><a href=news.html?lang=cn&class1=2&class2=11&page=2 class='NextA'>下一页</a>
                                    <span class='PageText'>转至第</span>
                                    <input type='text' id='metPageT' data-pageurl='news.html?lang=cn&class1=2&class2=11&page=||2' value='1'/>
                                    <input type='button' id='metPageB' value='页'/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
@endsection