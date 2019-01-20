@extends('Index.LeftBase')
@section('css')
	@parent
@endsection
@section('content')
<div class="met-banner-econy"  style="background-color:;" >
<img src="upload/1474296568.jpg">
  <div class="econynr">
	<div class="container">
		<div class="row">                
				<div class="title">
					<h1>服务项目</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="{{url('/')}}" title="首页">首页</a> &gt;
					<a href="{{url('/productos')}}">装修案例</a> >
					<a href="{{url('/productzs')}}">中式装修</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	<li class="dropdown">
		<a href="{{url('/productos')}}" title="装修案例" class="link active" data-toggle="dropdown">装修案例 <span class="caret"></span></a>
		<ul class="dropdown-menu bullet">
			<li><a href="{{url('/productos')}}"  title="欧式装修">欧式装修</a></li>
			<li><a href="{{url('/productzs')}}"  class="active" title="中式装修">中式装修</a></li>
			<li><a href="{{url('/productjz')}}"  title="精装装修">精装装修</a></li>
			<li><a href="{{url('/productjian')}}"  title="简装装修">简装装修</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a href="{{url('/news/3')}}" title="装修小常识" class="link ">装修小常识</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/activity')}}" title="项目活动" class="link ">项目活动</a>
	</li>
</ul>
@endsection
@section('dontent')
<h4>服务项目<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
  <ul class="category_item met_aside_list" >
    <li><a href="{{url('/productos')}}" class='active' title="装修案例" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修案例</a> 
      <ul>
        <li><a   href="{{url('/productos')}}" title="欧式装修" target='_self'>欧式装修</a></li>
        <li><a   class="active" href="{{url('/productzs')}}" title="中式装修" target='_self'>中式装修</a></li>
        <li><a   href="{{url('/productjz')}}" title="精装装修" target='_self'>精装装修</a></li>
        <li><a   href="{{url('/productjian')}}" title="简装装修" target='_self'>简装装修</a></li>
      </ul>
    </li>
    <li><a href="{{url('/news/3')}}"  title="装修小常识" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修小常识</a></li>
    <li><a href="{{url('/activity')}}"  title="项目活动" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;项目活动</a></li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
						<div class="section-title-style">
							<h2>中式装修</h2>
						</div>

<div class="met-product animsition type-1">
	<div class="container">
		<div class="row">
			<div class="less-page-content">

			<ul class="blocks blocks-100 blocks-xlg-4 blocks-md-3 blocks-sm-2 met-page-ajax met-grid" id="met-grid">


				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="商务会所" target='_self'>
								<img class="cover-image" src="upload/p1389849064.jpg" height='299' alt="商务会所">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="商务会所" target='_self'>商务会所</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="商务会所" target='_self'>
								<img class="cover-image" src="upload/p1389849617.jpg" height='299' alt="商务会所">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="商务会所" target='_self'>商务会所</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="客厅" target='_self'>
								<img class="cover-image" src="upload/p1389850762.jpg" height='299' alt="客厅">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="客厅" target='_self'>客厅</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="卧室" target='_self'>
								<img class="cover-image" src="upload/p1389852216.jpg" height='299' alt="卧室">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="卧室" target='_self'>卧室</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="别墅" target='_self'>
								<img class="cover-image" data-original="upload/p1389852083.jpg" height='299' alt="别墅">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="别墅" target='_self'>别墅</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="公寓" target='_self'>
								<img class="cover-image" data-original="upload/p1389852374.jpg" height='299' alt="公寓">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="公寓" target='_self'>公寓</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="医疗美容" target='_self'>
								<img class="cover-image" data-original="upload/p1389862805.jpg" height='299' alt="医疗美容">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="医疗美容" target='_self'>医疗美容</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="医疗体检" target='_self'>
								<img class="cover-image" data-original="upload/p1389863570.jpg" height='299' alt="医疗体检">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="医疗体检" target='_self'>医疗体检</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="体育中心-游泳馆" target='_self'>
								<img class="cover-image" data-original="upload/p1389720952.jpg" height='299' alt="体育中心-游泳馆">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="体育中心-游泳馆" target='_self'>体育中心-游泳馆</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="地铁站" target='_self'>
								<img class="cover-image" data-original="upload/p1389720775.jpg" height='299' alt="地铁站">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="地铁站" target='_self'>地铁站</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="工商银行" target='_self'>
								<img class="cover-image" data-original="upload/p1389721311.jpg" height='299' alt="工商银行">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="工商银行" target='_self'>工商银行</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="大堂" target='_self'>
								<img class="cover-image" data-original="upload/p1389722535.jpg" height='299' alt="大堂">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="大堂" target='_self'>大堂</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="会议室" target='_self'>
								<img class="cover-image" data-original="upload/p1389847371.jpg" height='299' alt="会议室">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="会议室" target='_self'>会议室</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="商务酒店" target='_self'>
								<img class="cover-image" data-original="upload/p1389848201.jpg" height='299' alt="商务酒店">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="商务酒店" target='_self'>商务酒店</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="主题酒店" target='_self'>
								<img class="cover-image" data-original="upload/p1389848875.jpg" height='299' alt="主题酒店">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="主题酒店" target='_self'>主题酒店</a>
							
						</h4>
					</div>
				</li>

				<li class="masonry-item ">
					<div class="widget widget-shadow">
						<figure class="widget-header cover">
							<a href="showproduct.html" title="事务所" target='_self'>
								<img class="cover-image" data-original="upload/p1389863368.jpg" height='299' alt="事务所">
							</a>
						</figure>
						<h4 class="widget-title">
							<a href="showproduct.html" title="事务所" target='_self'>事务所</a>
							
						</h4>
					</div>
				</li>


			</ul>



<div class="hidden-xs">
		    <div class='met_pager'>
			<span class='PreSpan'>上一页</span><a href=# class='Ahover'>1</a><a href=# >2</a><a href=# class='NextA'>下一页</a>
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