@extends('Index.LeftBase')
@section('css')
    @parent
@endsection
@section('content')
    <div class="met-banner-econy" style="background-color:;">
        <img src="{{asset('upload/1474296568.jpg')}}">
        <div class="econynr">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>服务项目</h1>
                    </div>
                    <div class="breadcumb">
                        <i class="fa fa-home"></i>
                        <a href="{{url('/')}}" title="首页">首页</a> &gt;
                        <a href="#">装修案例</a> >
                        <a href="#">{{$type->title}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('eontent')
    <ul class="met-column-nav-ul">
        @foreach($caseMenu as $val)
            @if($val->id == $type->id)
            <li class="dropdown"><a href="{{url('/product',array('id'=>$val->id))}}" title="{{$val->title}}" class="link active">{{$val->title}}</a></li>
            @else
            <li class="dropdown"><a href="{{url('/product',array('id'=>$val->id))}}" title="{{$val->title}}" class="link">{{$val->title}}</a></li>
            @endif
        @endforeach
    </ul>
@endsection
@section('dontent')
    <h4>服务项目<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
    <ul class="category_item met_aside_list">
        @foreach($caseMenu as $val)
            @if($val->id == $type->id)
                <li><a href="{{url('/product',array('id'=>$val->id))}}" class='active' title="{{$val->title}}" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$val->title}}</a></li>
            @else
                <li><a href="{{url('/product',array('id'=>$val->id))}}" class='' title="{{$val->title}}" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$val->title}}</a></li>
            @endif
        @endforeach
    </ul>
@endsection
@section('bontent')
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="section-title-style">
            <h2>{{$type->title}}</h2>
        </div>
        <div class="met-product animsition type-1">
            <div class="container">
                <div class="row">
                    <div class="less-page-content">
                        <ul class="blocks blocks-100 blocks-xlg-4 blocks-md-3 blocks-sm-2 met-page-ajax met-grid" id="met-grid">
                            @foreach($list as $val)
                            <li class="masonry-item">
                                <div class="widget widget-shadow">
                                    <figure class="widget-header cover">
                                        <a href="{{url('showproduct',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
                                            <img class="cover-image" src="{{asset($val->pic1)}}" height='299' alt="{{$val->title}}">
                                        </a>
                                    </figure>
                                    <h4 class="widget-title">
                                        <a href="{{url('showproduct',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>{{$val->title}}</a>
                                    </h4>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="hidden-xs">
                            {{$list->links('vendor/pagination/customPage')}}
                        </div>
                        <div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear"
                             data-animate="slide-bottom" data-repeat="false">
                            <button type="button" class="btn btn-default btn-block btn-squared ladda-button"
                                    id="met-page-btn" data-style="slide-left"
                                    data-url="product2.html?lang=cn&class1=3&class2=0&class3=0&mbpagelist=1"
                                    data-page="1">
                                <i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>更多产品
                            </button>
                        </div>

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