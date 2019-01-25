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
					<a href="{{url('/')}}" title="首页">
						<i class="icon wb-home" aria-hidden="true"></i>首页
					</a>
				</li>
				<li class="dropdown">
					<a href="#" title="服务项目" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">服务项目 <i class="caret"></i></a>
					<ul class="dropdown-menu bullet">
						@foreach($caseMenu as $val)
						<li><a href="{{url('/product',array('id'=>$val->id))}}" title="{{$val->title}}">{{$val->title}}</a></li>
						@endforeach
					</ul>
				</li>
				<li>
					<a href="{{url('/product',array('id'=>$type->id))}}" title="{{$type->title}}">{{$type->title}}</a>
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
								{{--三张切换图--}}
								<li data-src="{{url($inf->pic1)}}" data-exthumbimage="{{url($inf->pic1)}}">
									<a href="{{url($inf->pic1)}}">
										<img src="{{asset($inf->pic1)}}" class="img-responsive" alt="{{$inf->title}}" />
									</a> 
								</li> 
								<li data-src="{{url($inf->pic2)}}" data-exthumbimage="{{url($inf->pic2)}}">
									<a href="{{url($inf->pic2)}}">
										<img src="{{asset($inf->pic2)}}" class="img-responsive" alt="{{$inf->title}}" />
									</a> 
								</li> 
								<li data-src="{{url($inf->pic3)}}" data-exthumbimage="{{url($inf->pic3)}}">
									<a href="{{url($inf->pic3)}}">
										<img src="{{asset($inf->pic3)}}" class="img-responsive" alt="{{$inf->title}}" />
									</a> 
								</li> 
							</ul>
						</div> 
					</div> 
				</div>
			</div>
			<div class="visible-xs-block visible-sm-block height-20"></div>
			<div class="col-md-5 product-intro">
				<h1>{{$inf->title}}</h1>

				<p class="description">{{$inf->content}}</p>
	
				<div class="para">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							面积 : {{$inf->area}}
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							报价 : {{$inf->price}}
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							风格 : {{$type->title}}
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 margin-bottom-15 blue-grey-500">
							地址 : {{$inf->address}}
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
									<div>
										<p>
											{!! $inf->information !!}
										</p>
										<div id="metinfo_additional"></div>
									</div>
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
						<h4 class="example-title">相关设计师</h4>
							<div class="row">
								@foreach($des as $val)
								<div class="product-hot-list col-md-12 col-sm-4 col-xs-4 text-center margin-bottom-10">
									<a href="{{url('/teaminf',array('id'=>$val->id))}}" target="_blank" class="img" title="{{$val->name}}">
										<img data-original="{{asset($val->photo)}}" class="img-responsive" style='height:250px' alt="{{$val->name}}">
									</a>
									<a href="{{url('/teaminf',array('id'=>$val->id))}}" target="_blank" class="txt" title="商务会所">{{$val->name}}</a>
								</div>
								@endforeach
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