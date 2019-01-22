@extends('Index.LeftBase')
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/activity.css')}}" />
@endsection
@section('content')
<div class="met-banner-econy" style="background-color:;">
    <img src="{{asset('upload/1474296568.jpg')}}">
    <div class="econynr">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>公司新闻</h1>
                </div>
                <div class="breadcumb">
                    <i class="fa fa-home"></i><a href="{{url('/')}}" title="首页">首页</a> &gt; <a href="{{url('news/1')}}">新闻资讯</a> > <a href="{{url('news/2')}}">公司新闻</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	<li class="dropdown">
		<a href="{{url('/news/1')}}" title="公司新闻" class="link active">公司新闻</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/news/2')}}" title="行业动态" class="link ">行业动态</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/news/3')}}" title="装修小常识" class="link ">装修小常识</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/activity')}}" title="项目活动" class="link">项目活动</a>
	</li>
</ul>
@endsection
@section('dontent')
<h4>新闻资讯<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
  <ul class="category_item met_aside_list" >
    <li><a href="{{url('/news/1')}}" class='active' title="公司新闻" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;公司新闻</a></li>
    <li><a href="{{url('/news/2')}}"  title="行业动态" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;行业动态</a></li>
    <li><a href="{{url('/news/3')}}"  title="装修小常识" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修小常识</a></li>
    <li><a href="{{url('/activity')}}"  title="项目活动" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;项目活动</a></li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>内容详情</h2>
	</div>
	<div class="met-shownews animsition">
		<div class="container">
			<div class="row">
                <div class="met-shownews-header">
                    <h1>{{$inf->title}}</h1>
                    <div class="info">
                        <span>
                        	<i class="icon wb-pencil margin-right-5" aria-hidden="true"></i>
							<span>发布时间</span>
							<span>{{$inf->time}}</span>
                        </span>
                        <span>
                            <i class="icon wb-eye margin-right-5" aria-hidden="true"></i>
                            <span>关注人数</span>
                            <span>{{$inf->looked}}</span>
                        </span>
                    </div>
                </div>
                <div class="met-editor lazyload clearfix">
                    <p class='text-center'>
                        <img src="{{url($inf->pic)}}" alt=''/>
                    </p>
                    <div>
                    	<p>
                    		<span class="teaminfo_text">{!!$inf->content!!}</span>
                    	</p>
                    	<div id="metinfo_additional"></div>
                    </div>
                    <div class="center-block met_tools_code"></div>
                </div>
                <div class="met-shownews-footer">
                    <ul class="pager pager-round">
                        @if($pre)
                        <li class="previous ">
                            <a href="{{url('newsInf',['id'=>$pre->id])}}" title="{{$pre->title}}"> 上一篇<span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$pre->title}}</span>
                            </a>
                        </li>
                        @endif
                        @if($next)
                        <li class="next ">
                            <a href="{{url('newsInf',['id'=>$next->id])}}" title="{{$next->title}}">下一篇<span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$next->title}}</span>
                            </a>
                        </li>
                        @endif
                    </ul>
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