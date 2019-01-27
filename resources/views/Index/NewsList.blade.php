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
                    <h1>{{$typeName}}</h1>
                </div>
                <div class="breadcumb">
                    <i class="fa fa-home"></i><a href="{{url('/')}}" title="首页">首页</a> &gt; <a href="#">新闻资讯</a> > <a href="#">{{$typeName}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	@foreach($artMenu as $val)
		@if($val->id == $typeId)
		<li class="dropdown"><a href="{{url('/news',array('id'=>$val->id))}}" class="link active" title="{{$val->title}}">{{$val->title}}</a></li>
		@else
		<li class="dropdown"><a href="{{url('/news',array('id'=>$val->id))}}" class="link" title="{{$val->title}}">{{$val->title}}</a></li>
		@endif
	@endforeach
</ul>
@endsection
@section('dontent')
<h4>新闻资讯<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
<ul class="category_item met_aside_list" >
	@foreach($artMenu as $val)
		@if($val->id == $typeId)
		  	<li><a href="{{url('/news',array('id'=>$val->id))}}" class='active' title="{{$val->title}}" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$val->title}}</a></li>
		@else
			<li><a href="{{url('/news',array('id'=>$val->id))}}" class='' title="{{$val->title}}" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{$val->title}}</a></li>
		@endif
  	@endforeach
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>{{$typeName}}</h2>
	</div>
	<div class="met-product animsition">
		<div class="container">
			<div class="row">
				<div class="less-page-content">
					@foreach($list as $val)
                        <div class="met-index-service">
                            <a href="{{url('newsInf',['id'=>$val->id])}}" title="{{$val->title}}" target='_self'>
	                            <div class="services-box">
	                            	<img src="{{url($val->pic)}}"  title="{{$val->title}}" alt="{{$val->title}}" >
                            		<div class="content">
                            			<h4>{{$val->title}}</h4>
                            			<div class="huodong one">
											<span>
												<i class="icon wb-pencil margin-right-5" aria-hidden="true"></i>
												<span>发布时间：</span>
												<span>{{$val->time}}</span>
											</span>
											<span>
												<i class="icon wb-eye margin-right-5" aria-hidden="true"></i>
												<span>关注人数：</span>
												<span>{{$val->looked}}</span>
											</span>
				                        </div>
				                        <div class="des">{{$val->introduction}}</div>
				                    </div>
					            </div>    
	                        </a>
                        </div>
                    @endforeach
					<div class="hidden-xs">
						{{$list->links('vendor/pagination/customPage')}}
					</div>
					<div class="met-page-ajax-body visible-xs-block invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
						<button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="product2.html?lang=cn&class1=3&class2=0&class3=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>更多产品</button>
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