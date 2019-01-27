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
					<h1>设计团队</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href={{url('/index')}} title="首页">首页</a> &gt;
					<a href={{url('/team')}}>设计团队</a>
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
					@foreach($list as $val)
					<li class="widget ">
						<div class="cover overlay overlay-hover">
							<img class="cover-image overlay-scale" src="{{asset($val->photo)}}" style='height:299px;' alt="{{$val->post}}" />
							<div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
								<div class="vertical-align-middle">
									<div class="widget-time widget-divider">
										<span>{{$val->post}}</span>
									</div>
									<h3 class="widget-title margin-bottom-20">{{$val->name}}</h3>
									<a href={{url('/teaminf',array('id'=>$val->id))}} title='{{$val->post}}' class="btn btn-outline btn-inverse" target='_self'>查看详情</a>
								</div>
							</div>
						</div>
					</li>
					@endforeach
				</div>
				<div class='met_pager'>
					{{$list->links('vendor/pagination/customPage')}}
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