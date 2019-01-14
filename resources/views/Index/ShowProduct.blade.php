@extends('Index.Base')
@section('css')
	@parent
@endsection
@section('content')
	<div class="met-position  pattern-show">
	<div class="container">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="index.html" title="首页">
						<i class="icon wb-home" aria-hidden="true"></i>首页
					</a>
				</li>
				<li class="dropdown">
					<a href="product.html" title="服务项目" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">服务项目 <i class="caret"></i></a>
					<ul class="dropdown-menu bullet">

						<li><a href="product.html" title="装修案例">装修案例</a></li>

						<li><a href="product.html" title="装修小常识">装修小常识</a></li>

					</ul>
				</li>
				<li>
					<a href="product.html" title="欧式装修">
						欧式装修
					</a>
				</li>

			</ol>
		</div>
	</div>
</div>

<div class="page met-showproduct pagetype1 animsition">

<div class="met-showproduct-head">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div id="gallery" class="ad-gallery" data-x="400" data-y="300"> 
					<div class="ad-image-wrapper"></div> 
					<div class="ad-controls"></div> 
					<div class="ad-nav"> 
						<div class="ad-thumbs"> 
							<ul class="ad-thumb-list" id="lightgallery"> 
								<li data-src="upload/1389847371.jpg" data-exthumbimage="upload/1389847371.jpg">
									<a href="upload/1389847371.jpg"> 
										<img src="upload/1389847371x.jpg" class="img-responsive" alt="会议室" />
									</a> 
								</li> 

								<li data-src="upload/1389847473.jpg" data-exthumbimage="upload/1389847473.jpg">
									<a href="upload/1389847473.jpg"> 
										<img src="upload/1389847473x.jpg" class="img-responsive" alt="会议室" />
									</a> 
								</li> 

								<li data-src="upload/1389847723.jpg" data-exthumbimage="upload/1389847723.jpg">
									<a href="upload/1389847723.jpg"> 
										<img src="upload/1389847723x.jpg" class="img-responsive" alt="会议室" />
									</a> 
								</li> 

							</ul> 
						</div> 
					</div> 
				</div>
			</div>
			<div class="visible-xs-block visible-sm-block height-20"></div>
			<div class="col-md-5 product-intro">
				<h1>会议室</h1>

				<p class="description">现代多媒体会议室已成为现代新型办公建筑越来越重要的设计范畴，要求功能与氛围的统一,设计出开阔、大气，整洁，能够提供稳定、便捷、生动的高效率视频会议服务同时注重多媒体视讯功能以及其它IT设备的集成功能。</p>
	
				<div class="para">
					<div class="row">
						
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							面积 : 140m²
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							地址 : 中国
						</div>
						
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							风格 : 现代
						</div>
	
					</div>
				</div>

				<div class="tools"></div>

			</div>
		</div>
	</div>
</div>

	<div class="met-showproduct-body">
		<div class="container">
			<div class="row no-space">
				<div class="col-md-9 product-content-body">
					<div class="row">

					<div class="panel product-detail">
						<div class="panel-body">
							<ul class="nav nav-tabs nav-tabs-line met-showproduct-navtabs affix-nav">
								<li class="active"><a data-toggle="tab" href="#product-details" data-get="product-details">详细信息</a></li>

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

				<!--右侧开始-->
				<div class="col-md-3">
				<div class="row">
					<div class="panel product-hot">
						<div class="panel-body">
						<h4 class="example-title">热门推荐</h4>
							<div class="row">

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="商务会所">
										<img data-original="upload/1389849064.jpg" class="img-responsive" style='height:250px' alt="商务会所">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="商务会所">商务会所</a>
									
								</div>

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="商务会所">
										<img data-original="upload/1389849617.jpg" class="img-responsive" style='height:250px' alt="商务会所">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="商务会所">商务会所</a>
									
								</div>

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="客厅">
										<img data-original="upload/1389850762.jpg" class="img-responsive" style='height:250px' alt="客厅">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="客厅">客厅</a>
									
								</div>

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="卧室">
										<img data-original="upload/1389852216.jpg" class="img-responsive" style='height:250px' alt="卧室">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="卧室">卧室</a>
									
								</div>

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="别墅">
										<img data-original="upload/1389852083.jpg" class="img-responsive" style='height:250px' alt="别墅">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="别墅">别墅</a>
									
								</div>

								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="/showproduct" target="_blank" class="img" title="公寓">
										<img data-original="upload/1389852374.jpg" class="img-responsive" style='height:250px' alt="公寓">
									</a>
									<a href="/showproduct" target="_blank" class="txt" title="公寓">公寓</a>
									
								</div>

							</div>
						</div>
					</div>
				</div>
				</div>
				<!--右侧结束-->

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