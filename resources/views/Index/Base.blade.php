<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="renderer" content="webkit">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content="" data-variable=",,,,,zstyle"/>
    <meta name="description" content="{{$com->web_description}}"/>
    <meta name="keywords" content="{{$com->web_keyword}}"/>
    @section('css')
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link rel="stylesheet" href="{{asset('templates/zstyle/cache/7fa082e0a5a19929.min.css')}}">
    @show
    <title>{{$com->web_title}}</title>
</head>
<body class="minWidth bgw">
<nav id="mobileNav" style="display:none;">
    <ul class="daohang_m">
        <li><a href="{{url('/')}}" title="首页">首页</a></li>
        <li><span>关于我们</span>
            <ul>
                <li><a href="{{url('/company')}}" title="公司简介">公司简介</a></li>
                <li><a href="{{url('/cutural')}}" title="企业文化">企业文化</a></li>
                <li><a href="{{url('/process')}}" title="装修流程">装修流程</a></li>
                <li><a href="{{url('/feedback')}}" title="在线反馈">在线反馈</a></li>
                <li><a href="{{url('/contact')}}" title="联系我们">联系我们</a></li>
            </ul>
        </li>
        <li><span>装修案例</span>
            <ul>
                @foreach($caseMenu as $val)
                    <li><a href="{{url('/product',array('id'=>$val->id))}}" title="{{$val->title}}">{{$val->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{url('/team')}}" title="设计团队">设计团队</a></li>
        <li><span>新闻资讯</span>
            <ul>
                @foreach($artMenu as $val)
                    <li><a href="{{url('/news',array('id'=>$val->id))}}" title="{{$val->title}}">{{$val->title}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{url('/job')}}" title="在线招聘">在线招聘</a></li>
    </ul>
</nav>
<div id="page">
    <nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <a href="{{url('/')}}" class="navbar-logo vertical-align" title="装饰公司">
                        <div class="vertical-align-middle"><img src="{{asset('/templates/zstyle/min/img/logo.png')}}" alt="装饰公司" title="装饰公司"/></div>
                    </a>
                </div>
                <div class="pull-right econav">
                    <ul>
                        <li>
                            <button type="button" data-target="#site-navbar-search" data-toggle="modal">
                                <span class="sr-only">Toggle Search</span>
                                <i class="icon wb-search"></i>
                            </button>
                        </li>
                        <button class="mobileMenuBtn" type="button"><span class="icon fa-bars"></span></button>
                    </ul>
                </div>
                <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">
                    <ul class="nav navbar-nav navbar-right navlist daohang">
                        <li><a href="{{url('/')}}" title="首页" class="link">首页</a></li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href='#' aria-expanded="false" role="button" title="关于我们">关于我们 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                <li><a href="{{url('/company')}}" class="" title="公司简介">公司简介</a></li>
                                <li><a href="{{url('/cutural')}}" class="" title="企业文化">企业文化</a></li>
                                <li><a href="{{url('/process')}}" class="" title="装修流程">装修流程</a></li>
                                <li><a href="{{url('/feedback')}}" class="" title="在线反馈">在线反馈</a></li>
                                <li><a href="{{url('/contact')}}" class="" title="联系我们">联系我们</a></li>
                            </ul>
                        </li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href="#" aria-expanded="false" role="button" title="装修案例">装修案例 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                @foreach($caseMenu as $val)
                                    <li><a href="{{url('/product',array('id'=>$val->id))}}" class="" title="{{$val->title}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="margin-left-0"><a href="{{url('/team')}}" title="设计团队" class="link ">设计团队</a></li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href="#" aria-expanded="false" role="button" title="新闻资讯">新闻资讯 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                @foreach($artMenu as $val)
                                    <li><a href="{{url('/news',array('id'=>$val->id))}}" class="" title="{{$val->title}}">{{$val->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="margin-left-0"><a href="{{url('/job')}}" title="在线招聘" class="link ">在线招聘</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	 @yield('content')
	<div class="ecofootbg">
    <div class="met-footnav-eco">
        <div class="container">
            <div class="row mob-masonry">
                <div class="col-md-3 col-sm-6 col-xs-12 list text-left masonry-item">
                    <h4>底部简介</h4>
                    <p>
                    <p>&nbsp; &nbsp; &nbsp;{{$com->bre}}</p></p>
                    <a href="{{url('/company')}}" title="底部简介" target='_self' class="read-more">查看更多<i class="fa fa-arrow-circle-right"></i></a>
                    <ul class="social">
                        <li>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes" rel="nofollow" target="_blank" class="hvr-radial-out">
                                <i class="fa fa-qq"></i>
                            </a>
                        </li>
                        <li>
                            <a id="met-weixin"><i class="fa fa-weixin "></i></a>
                            <div id="met-weixin-content" class="hide">
                                <div class="text-center met-weixin-img"><img src="{{asset('upload/1464081530.jpg')}}"/></div>
                            </div>
                        </li>
                        <li><a href="tel:86-12345678901" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="fa pe-call"></i></a></li>
                        <li><a href="#" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="fa fa-weibo"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list ecoinfo text-left masonry-item">
                    <h4>底部新闻</h4>
                    <ul>
                        @foreach($artBt as $val)
                            <li><a href="{{url('/newsInf',array('id'=>$val->id))}}" target='_self' title="{{$val->title}}">{{$val->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6  list col-xs-12 masonry-item">
                    <h4>底部案例</h4>
                    <div class="gallery">
                        @foreach($caseBt as $val)
                            <a href="{{url('/showproduct',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
                                <img data-original="{{asset($val->pic1)}}" alt="{{$val->title}}" title="{{$val->title}}">
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list  text-left masonry-item">
                    <h4>联系我们</h4>
                    <ul class="contact-info">
                        <li><i class="icon pe-map-marker"></i>{{$com->name}}</li>
                        <li><i class="icon pe-call"></i><a href="tel:{{$com->phone}}" title="{{$com->phone}}">{{$com->phone}}</a></li>
                        <li><i class="icon pe-mail"></i>{{$com->email}}</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <p>{{$com->web_title}} 版权所有 {{$com->web_copyright}} {{$com->web_icp}} </p>
            <p>电话：{{$com->phone}}  Email:{{$com->email}}</p>
        </div>
    </footer>
</div>
<div class="modal fade modal-3d-flip-vertical" id="site-navbar-search" aria-hidden="true" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-center modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <div class="container">
                    <div class="row">
                        <div class="search">
                            <form role="search" action="{{url('/search')}}">
                                <div class="form-group ">
                                    <div class="input-search">
                                        <input type="text" id="val" class="form-control" name="val" placeholder="搜索">
                                        <button type="submit" class="input-search-btn"><i class="icon wb-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>
</body>
</html>
{{--公共js--}}
@section('publicJs')
	<!--[if lt IE 10]>
		<script src="{{asset('app/system/include/static/vendor/media-match/media.match.min.js')}}"></script>
		<script src="{{asset('app/system/include/static/vendor/respond/respond.min.js')}}"></script>
		<script src="{{asset('app/system/include/static/js/classList.min.js')}}"></script>
	<![endif]-->
	<script type="text/javascript" src="{{asset('js/jquery-2.2.1.min.js')}}"></script>
	<!--<script type="text/javascript" src="{{asset('js/web/daohang.js')}}"></script>-->
	<script type="text/javascript" src="{{asset('templates/zstyle/cache/052ddd225bb8ca71.min.js')}}"></script>
@show
{{--私有js--}}
@section('js')
@show
<script>
    //限制鼠标右键
//    document.oncontextmenu=new Function("event.returnValue=false;");
</script>
