@extends('Index.LeftBase')
@section('css')
	@parent
	<link rel="stylesheet" href="{{asset('css/activity.css')}}" />
@endsection
@section('content')
<div class="met-banner-econy"  style="background-color:;" >
<img src="upload/1474296568.jpg">
  <div class="econynr">
	<div class="container">
		<div class="row">                
				<div class="title">
					<h1>项目活动</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="{{url('/')}}" title="首页">首页</a> &gt;
					<a href="{{url('/activity')}}">服务项目</a> >
					<a href="{{url('/activity')}}">项目活动</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	<li class="dropdown">
		<a href="{{url('/productos')}}" title="装修案例" class="link" data-toggle="dropdown">装修案例 <span class="caret"></span></a>
		<ul class="dropdown-menu bullet">
			<li><a href="{{url('/productos')}}" title="欧式装修">欧式装修</a></li>
			<li><a href="{{url('/productzs')}}"  title="中式装修">中式装修</a></li>
			<li><a href="{{url('/productjz')}}"  title="精装装修">精装装修</a></li>
			<li><a href="{{url('/productjian')}}"  title="简装装修">简装装修</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a href="{{url('/news/3')}}" title="装修小常识" class="link ">装修小常识</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/activity')}}" title="项目活动" class="link active">项目活动</a>
	</li>
</ul>
@endsection
@section('dontent')
<h4>服务项目<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
  <ul class="category_item met_aside_list" >
    <li><a href="{{url('/productos')}}" title="装修案例" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修案例</a></li>
    <li><a href="{{url('/news/3')}}"  title="装修小常识" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修小常识</a></li>
    <li><a href="{{url('/activity')}}" class='active'   title="项目活动" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;项目活动</a></li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>项目活动</h2>
	</div>
	<div class="met-product animsition">
		<div class="container">
			<div class="row">
				<div class="less-page-content">
					<div class="met-index-service">
						<a href="{{url('/activityinf')}}" title="精装修房" target='_self'>
							<div class="services-box" >
								<img data-original="upload//1474115103x.jpg"  title="精装修房" alt="精装修房" >
								<div class="content">
									<h4>精装修房活动1</h4>
									<div class="huodong">
										<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>活动时间：2019-1-20</span>
			                        </div>
									<p>本设计从现在人的角度，以现在手法融合东方古典美学，天人合一的居住理念，结合客户审美取向，空间灯具，家私及饰品相当另类。汇聚东方文化的宽阔气度，打造崭新的新东方主义，放眼国际的顶级居住空间。更置中国人的</p>
								</div>
							</div>
						</a>
					</div>
					<div class="met-index-service">
						<a href="{{url('/activityinf')}}" title="精装修房" target='_self'>
							<div class="services-box" >
								<img data-original="upload//1474115103x.jpg"  title="精装修房" alt="精装修房" >
								<div class="content">
									<h4>精装修房活动2</h4>
									<div class="huodong">
										<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>活动时间：2019-1-20</span>
			                        </div>
									<p>本设计从现在人的角度，以现在手法融合东方古典美学，天人合一的居住理念，结合客户审美取向，空间灯具，家私及饰品相当另类。汇聚东方文化的宽阔气度，打造崭新的新东方主义，放眼国际的顶级居住空间。更置中国人的</p>
								</div>
							</div>
						</a>
					</div>
					<div class="met-index-service">
						<a href="{{url('/activityinf')}}" title="精装修房" target='_self'>
							<div class="services-box" >
								<img data-original="upload//1474115103x.jpg"  title="精装修房" alt="精装修房" >
								<div class="content">
									<h4>精装修房活动3</h4>
									<div class="huodong">
										<span><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>活动时间：2019-1-20</span>
			                        </div>
									<p>本设计从现在人的角度，以现在手法融合东方古典美学，天人合一的居住理念，结合客户审美取向，空间灯具，家私及饰品相当另类。汇聚东方文化的宽阔气度，打造崭新的新东方主义，放眼国际的顶级居住空间。更置中国人的</p>
								</div>
							</div>
						</a>
					</div>
					<div class="hidden-xs">
					    <div class='met_pager'>
							<span class='PreSpan'>上一页</span>
							<a href=# class='Ahover'>1</a>
							<a href=# >2</a>
							<a href=# class='NextA'>下一页</a>
						    <span class='PageText'>转至第</span>
						    <input type='text' id='metPageT' data-pageurl='product.html?lang=cn&class1=3&page=||2' value='1' />
						    <input type='button' id='metPageB' value='页' />
					    </div>
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