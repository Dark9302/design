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
					<h1>装修流程</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="{{url('/')}}" title="首页">首页</a> &gt;
					<a href="{{url('/company')}}">关于我们</a> >
					<a href="{{url('/process')}}">装修流程</a>
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
		<a href="{{url('/process')}}" title="装修流程" class="link active">装修流程</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/feedback')}}" title="在线反馈" class="link ">在线反馈</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/contact')}}" title="联系我们" class="link ">联系我们</a>
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
		<a href="{{url('/cutural')}}" title="企业文化" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;企业文化</a>
	</li>
	<li>
		<a href="{{url('/process')}}" class='active' title="装修流程" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修流程</a>
	</li>
	<li>
		<a href="{{url('/feedback')}}" title="在线反馈" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;在线反馈</a>
	</li>
	<li>
		<a href="{{url('/contact')}}" title="联系我们" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联系我们</a>
	</li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>装修流程</h2>
	</div>

	<section class="met-show animsition">
		<div class="container">
			<div class="row">
				<div class="panel product-detail">
					<div class="panel-body">
						<ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
							<li class="active"><a data-toggle="tab" href="#product-details" data-get="product-details">步骤一</a></li>

						</ul>
						<div class="tab-content">
							<div class="tab-pane met-editor lazyload clearfix animation-fade active" id="product-details">
								<div><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现代多媒体会议室已成为现代新型办公建筑越来越重要的设计范畴，要求功能与氛围的统一,设计出开阔、大气，整洁，能够提供稳定、便捷、生动的高效率视频会议服务同时注重多媒体视讯功能以及其它IT设备的集成功能。</p><div id="metinfo_additional"></div></div>
							</div>

						</div>
						<ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
							<li class="active"><a data-toggle="tab" href="#product-details" data-get="product-details">步骤二</a></li>

						</ul>
						<div class="tab-content">
							<div class="tab-pane met-editor lazyload clearfix animation-fade active" id="product-details">
								<div><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现代多媒体会议室已成为现代新型办公建筑越来越重要的设计范畴，要求功能与氛围的统一,设计出开阔、大气，整洁，能够提供稳定、便捷、生动的高效率视频会议服务同时注重多媒体视讯功能以及其它IT设备的集成功能。</p><div id="metinfo_additional"></div></div>
							</div>

						</div>
						<ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
							<li class="active"><a data-toggle="tab" href="#product-details" data-get="product-details">步骤三</a></li>

						</ul>
						<div class="tab-content">
							<div class="tab-pane met-editor lazyload clearfix animation-fade active" id="product-details">
								<div><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现代多媒体会议室已成为现代新型办公建筑越来越重要的设计范畴，要求功能与氛围的统一,设计出开阔、大气，整洁，能够提供稳定、便捷、生动的高效率视频会议服务同时注重多媒体视讯功能以及其它IT设备的集成功能。</p><div id="metinfo_additional"></div></div>
							</div>

						</div>
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