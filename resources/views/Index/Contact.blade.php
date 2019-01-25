@extends('Index.LeftBase')
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
					<h1>联系我们</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="{{url('/')}}" title="首页">首页</a> &gt;
					<a href="{{url('/company')}}">关于我们</a> >
					<a href="{{url('/contact')}}">联系我们</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	<li class="dropdown">
		<a href="{{url('/company')}}" title="公司简介" class="link ">公司简介</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/cutural')}}" title="企业文化" class="link ">企业文化</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/process')}}" title="装修流程" class="link ">装修流程</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/feedback')}}" title="在线反馈" class="link ">在线反馈</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/contact')}}" title="联系我们" class="link active">联系我们</a>
	</li>
</ul>
@endsection
@section('dontent')
<h4>关于我们<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
<ul class="category_item met_aside_list">
	<li>
		<a href="{{url('/company')}}"  title="公司简介" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;公司简介</a>
	</li>
	<li>
		<a href="{{url('/cutural')}}"  title="企业文化" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;企业文化</a>
	</li>
	<li>
		<a href="{{url('/process')}}"  title="装修流程" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修流程</a>
	</li>
	<li>
		<a href="{{url('/feedback')}}" title="在线反馈" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;在线反馈</a>
	</li>
	<li>
		<a href="{{url('/contact')}}" class='active' title="联系我们" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联系我们</a>
	</li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>联系我们</h2>
	</div>

	<section class="met-show animsition">
		<div class="container">
			<div class="row">
				<div class="met-editor lazyload clearfix">
					<div>
						<iframe src="/map" style="border: none;width: 100%;height: 500px;"></iframe>
						<!--<p><img data-original="upload/1474096450.jpg" style="width:100% " / alt="图片关键词"></p>-->
						<p>

							&nbsp;</p>
						<div><strong>保定喜迎门装饰工程有限公司</strong></div>
						<div>地 &nbsp;址：河北省保定市</div>
						<div>电 &nbsp;话：0731-88888888</div>
						<div>Email：admin@admin.com</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection
@section('publicJs')
	@parent
@endsection
@section('js')
@endsection