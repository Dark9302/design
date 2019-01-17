<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="renderer" content="webkit">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="generator" content="" data-variable=",,,,,zstyle"/>
    <meta name="description" content="装修"/>
    <meta name="keywords" content="保定喜迎门装饰工程有限公司"/>
    @section('css')
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link rel="stylesheet" href="{{asset('templates/zstyle/cache/7fa082e0a5a19929.min.css')}}">
    @show
    <title>保定喜迎门装饰工程有限公司</title>
</head>
<body class="minWidth bgw">
<nav id="mobileNav" style="display:none;">
    <ul class="daohang">
        <li class="active"><a href={{url('/')}} title="首页">首页</a></li>
        <li><span>关于我们</span>
            <ul>
                <li><a href={{url('/company')}} title="公司简介">公司简介</a></li>
                <li><a href={{url('/cutural')}} title="企业文化">企业文化</a></li>
                <li><a href={{url('/company')}} title="装修流程">装修流程</a></li>
                <li><a href={{url('/feedback')}} title="在线反馈">在线反馈</a></li>
                <li><a href={{url('/contact')}} title="联系我们">联系我们</a></li>
            </ul>
        </li>
        <li><span>服务项目</span>
            <ul>
                <li><span>装修案例</span>
                    <ul>
                        <li><a href={{url('/productos')}} title="欧式">欧式</a></li>
                        <li><a href={{url('/productzs')}} title="中式">中式</a></li>
                        <li><a href={{url('/productjz')}} title="精装">精装</a></li>
                        <li><a href={{url('/productjian')}} title="简装">简装</a></li>
                    </ul>
                </li>
                <li><a href={{url('/know')}} title="装修小常识">装修小常识</a></li>
            </ul>
        </li>
        <li><a href={{url('/team')}} title="设计团队">设计团队</a></li>
        <li><span>新闻资讯</span>
            <ul>
                <li><a href={{url('/news/1')}} title="公司新闻">公司新闻</a></li>
                <li><a href={{url('/news/2')}} title="行业动态">行业动态</a></li>
            </ul>
        </li>
        <li><a href={{url('/job')}} title="在线招聘">在线招聘</a></li>
    </ul>
</nav>
<div id="page">
    <nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <a href={{url('/index')}} class="navbar-logo vertical-align" title="装饰公司">
                        <div class="vertical-align-middle"><img src={{url('/templates/zstyle/min/img/logo.png')}} alt="装饰公司" title="装饰公司"/></div>
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
                        <li><a href={{url('/')}} title="首页" class="link active">首页</a></li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href='#' aria-expanded="false" role="button" title="关于我们">关于我们 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                <li><a href={{url('/company')}} class="" title="公司简介">公司简介</a></li>
                                <li><a href={{url('/cutural')}} class="" title="企业文化">企业文化</a></li>
                                <li><a href={{url('/company')}} class="" title="装修流程">装修流程</a></li>
                                <li><a href={{url('/feedback')}} class="" title="在线反馈">在线反馈</a></li>
                                <li><a href={{url('/contact')}} class="" title="联系我们">联系我们</a></li>
                            </ul>
                        </li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href="#" aria-expanded="false" role="button" title="服务项目">服务项目 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="" role="button" tabindex="-1">装修案例</a>
                                    <ul class="dropdown-menu animate" role="menu">
                                        <li role="presentation"><a href={{url('/productos')}} class="" role="menuitem" tabindex="-1">欧式</a></li>
                                        <li role="presentation"><a href={{url('/productzs')}} class="" role="menuitem" tabindex="-1">中式</a></li>
                                        <li role="presentation"><a href={{url('/productjz')}} class="" role="menuitem" tabindex="-1">精装</a></li>
                                        <li role="presentation"><a href={{url('/productjian')}} class="" role="menuitem" tabindex="-1">简装</a></li>
                                    </ul>
                                </li>
                                <li><a href={{url('/know')}} class="" title="装修小常识">装修小常识</a></li>
                            </ul>
                        </li>
                        <li class="margin-left-0"><a href={{url('/team')}} title="设计团队" class="link ">设计团队</a></li>
                        <li class="dropdown margin-left-0 ecodropdown">
                            <a class="dropdown-toggle link " data-toggle="dropdown" href="#" aria-expanded="false" role="button" title="新闻资讯">新闻资讯 <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                                <li><a href={{url('/news/1')}} class="" title="公司新闻">公司新闻</a></li>
                                <li><a href={{url('/news/2')}} class="" title="行业动态">行业动态</a></li>
                            </ul>
                        </li>
                        <li class="margin-left-0"><a href={{url('/job')}} title="在线招聘" class="link ">在线招聘</a></li>
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
                    <p>&nbsp; &nbsp; &nbsp;装饰有限公司成立于1997年，是以家装为主，涉足商装、建材等相关产业的专业性装饰公司。具有施工、设计双乙级资质。通过多年的努力，在业内外形....</p></p>
                    <a href="about.html" title="底部简介" target='_self' class="read-more">查看更多<i class="fa fa-arrow-circle-right"></i></a>
                    <ul class="social">
                        <li>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=123456789&site=qq&menu=yes" rel="nofollow" target="_blank" class="hvr-radial-out">
                                <i class="fa fa-qq"></i>
                            </a>
                        </li>
                        <li><a href="#" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="fa fa-weibo"></i></a></li>

                        <li><a href="#" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="icon fa-twitter"></i></a></li>

                        <li><a href="#" rel="nofollow" target="_blank" class="hvr-radial-out"><i class="icon fa-google-plus"></i></a></li>

                        <li>
                            <a id="met-weixin"><i class="fa fa-weixin "></i></a>
                            <div id="met-weixin-content" class="hide">
                                <div class="text-center met-weixin-img"><img src="upload/1464081530.jpg"/></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list ecoinfo text-left masonry-item">
                    <h4>底部新闻</h4>
                    <ul>

                        <li><a href={{url('/newsInf')}} target='_self' title="低碳建筑首选天然石材">低碳建筑首选天然石材</a></li>

                        <li><a href={{url('/newsInf')}} target='_self' title="装修旺季促销建材家居">装修旺季促销建材家居</a></li>

                        <li><a href={{url('/newsInf')}} target='_self' title="全球原木材原料严重紧">全球原木材原料严重紧</a></li>

                        <li><a href={{url('/newsInf')}} target='_self' title="将文化融入设计 以设">将文化融入设计 以设</a></li>

                        <li><a href={{url('/newsInf')}} target='_self' title="我国玻璃纤维产业规模">我国玻璃纤维产业规模</a></li>

                    </ul>
                </div>
                <div class="col-md-3 col-sm-6  list col-xs-12 masonry-item">
                    <h4>底部案例</h4>
                    <div class="gallery">

                        <a href={{url('/ShowProduct')}} title="商务会所" target='_self'><img data-original="upload/f1389849064.jpg" alt="商务会所" title="商务会所"></a>

                        <a href={{url('/ShowProduct')}} title="商务会所" target='_self'><img data-original="upload/f1389849617.jpg" alt="商务会所" title="商务会所"></a>

                        <a href={{url('/ShowProduct')}} title="客厅" target='_self'><img data-original="upload/f1389850762.jpg" alt="客厅" title="客厅"></a>

                        <a href={{url('/ShowProduct')}} title="卧室" target='_self'><img data-original="upload/f1389852216.jpg" alt="卧室" title="卧室"></a>

                        <a href={{url('/ShowProduct')}} title="别墅" target='_self'><img data-original="upload/f1389852083.jpg" alt="别墅" title="别墅"></a>

                        <a href={{url('/ShowProduct')}} title="公寓" target='_self'><img data-original="upload/f1389852374.jpg" alt="公寓" title="公寓"></a>

                        <a href={{url('/ShowProduct')}} title="医疗美容" target='_self'><img data-original="upload/f1389862805.jpg" alt="医疗美容" title="医疗美容"></a>

                        <a href={{url('/ShowProduct')}} title="医疗体检" target='_self'><img data-original="upload/f1389863570.jpg" alt="医疗体检" title="医疗体检"></a>

                        <a href={{url('/ShowProduct')}} title="体育中心-游泳馆" target='_self'><img data-original="upload/f1389720952.jpg" alt="体育中心-游泳馆" title="体育中心-游泳馆"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 list  text-left masonry-item">
                    <h4>联系我们</h4>
                    <ul class="contact-info">

                        <li><i class="icon pe-map-marker"></i>保定市喜迎门装饰工程有限公司</li>

                        <li><i class="icon pe-call"></i><a href="tel:86-12345678901" title="86-12345678901">86-12345678901</a></li>

                        <li><i class="icon pe-mail"></i>123456789@qq.com</li>

                        <li><i class="icon pe-global"></i>www.spademo.com</li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <p>保定喜迎门工程装饰有限公司 版权所有 2008-2017 湘ICP备8888888 </p>
            <p>电话：0731-12345678 12345678 QQ:88888888 999999 Email:admin@admin.com</p>
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
                            <form role="search" action="search.html">
                                <input type='hidden' name='lang' value='cn'/>
                                <div class="form-group ">
                                    <div class="input-search">
                                        <input type="text" class="form-control" name="searchword" placeholder="搜索">
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
	<script type="text/javascript" src="{{asset('js/web/daohang.js')}}"></script>
	<script type="text/javascript" src="{{asset('templates/zstyle/cache/052ddd225bb8ca71.min.js')}}"></script>
@show
{{--私有js--}}
@section('js')
@show
<script>
    //限制鼠标右键
//    document.oncontextmenu=new Function("event.returnValue=false;");
</script>
