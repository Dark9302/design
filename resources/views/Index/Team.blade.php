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
					<h1>设计团队</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="index.html" title="首页">首页</a> &gt;
					<a href="case.html">设计团队</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>设计团队</h2>
	</div>

	<div class="met-img animsition">
		<div class="container-fluid">
			<div class="row">
				<div class="blocks space-100 blocks-xlg-4 blocks-md-3 blocks-sm-2 met-page-ajax">

					<li class="widget ">
						<div class="cover overlay overlay-hover">
							<img class="cover-image overlay-scale" src="upload/x1474449984.jpg" style='height:299px;' alt="医院病房" />
							<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
								<div class="vertical-align-middle">
									<div class="widget-time widget-divider">
										<span>首席设计师</span>
									</div>
									<h3 class="widget-title margin-bottom-20">梁超</h3>

									<a href='showcase.html' title='医院病房' class="btn btn-outline btn-inverse" target='_self'>查看详情</a>

								</div>
							</div>
						</div>
					</li>

					<li class="widget ">
						<div class="cover overlay overlay-hover">
							<img class="cover-image overlay-scale" src="upload/x1474449696.jpg" style='height:299px;' alt="医院病房" />
							<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
								<div class="vertical-align-middle">
									<div class="widget-time widget-divider">
										<span>首席设计师</span>
									</div>
									<h3 class="widget-title margin-bottom-20">玛卡嘉怡</h3>

									<a href='showcase.html' title='医院病房' class="btn btn-outline btn-inverse" target='_self'>查看详情</a>

								</div>
							</div>
						</div>
					</li>
					
					<li class="widget ">
						<div class="cover overlay overlay-hover">
							<img class="cover-image overlay-scale" src="upload/x1474449689.jpg" style='height:299px;' alt="医院病房" />
							<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
								<div class="vertical-align-middle">
									<div class="widget-time widget-divider">
										<span>专家设计师</span>
									</div>
									<h3 class="widget-title margin-bottom-20">李启胜</h3>

									<a href='showcase.html' title='医院病房' class="btn btn-outline btn-inverse" target='_self'>查看详情</a>

								</div>
							</div>
						</div>
					</li>
					
					<li class="widget ">
						<div class="cover overlay overlay-hover">
							<img class="cover-image overlay-scale" src="upload/x1474450852.jpg" style='height:299px;' alt="医院病房" />
							<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
								<div class="vertical-align-middle">
									<div class="widget-time widget-divider">
										<span>专家设计师</span>
									</div>
									<h3 class="widget-title margin-bottom-20">张恒伟</h3>

									<a href='showcase.html' title='医院病房' class="btn btn-outline btn-inverse" target='_self'>查看详情</a>

								</div>
							</div>
						</div>
					</li>

				</div>
				<div class='met_pager'>
					<span class='PreSpan'>上一页</span>
					<a href=# class='Ahover'>1</a>
					<a href=#>2</a>
					<a href=# class='NextA'>下一页</a>
					<span class='PageText'>转至第</span>
					<input type='text' id='metPageT' data-pageurl='product.html?lang=cn&class1=3&page=||2' value='1' />
					<input type='button' id='metPageB' value='页' />
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