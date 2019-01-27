@extends('Index.Base')
@section('css')
	@parent
@endsection
@section('content')
	<div class="main-slider met-banner" style="background: url(upload/1474302297.jpg) 50% 50% no-repeat; background-size: cover;transition: all 0.3s;">
		<div  class="rev_slider_wrapper" >
			<div class="tp-banner rev_slider tp-overflow-hidden" data-alias="showcase-carousel"  eco_arrows_open="true" eco_arrows="hermes"  eco_arrows_margin="20" eco_bullets_open="true" eco_bullets="uranus"  eco_bullets_direction="horizontal" eco_bullets_align_hor="center" eco_bullets_align_vert="bottom" eco_bullets_offset_hor="0" eco_bullets_offset_vert="20"  data-version="5.2.5.4">
				<ul>
					@foreach($pic as $val)
					<li data-transition="boxslide" data-slotamount="random" data-masterspeed="1000" data-thumb="{{asset($val->picture)}}" data-link="#"  data-slideindex="back" data-saveperformance="off"  data-title="{{$val->title1}}" >
						<img src="{{asset($val->picture)}}"  alt="{{$val->title1}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >

						<div class="tp-caption lfb tp-resizeme ecoslidert" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['-80','-80','-80','-60']" data-fontsize="['46','46','46','28']" data-lineheight="['46','46','46','28']" data-start="1000" data-transform_idle="o:1;"data-transform_in="y:top;s:1500;e:Power3.easeOut;"data-transform_out="y:top;s:1000;e:Power2.easeIn;"data-splitin="none"data-splitout="none" style="color:; background:transparent;padding:0px;">{{$val->title1}}</div>
						<div class="tp-caption lfb tp-resizeme ecodesc" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['10','10','10','15']" data-fontsize="['32','32','32','24']" data-lineheight="['46','46','46','38']" data-start="1500" data-transform_idle="o:1;"data-transform_in="x:left;s:1500;e:Power3.easeOut;"data-transform_out="x:left;s:1000;e:Power2.easeIn;"data-splitin="none"data-splitout="none" style="">{{$val->title2}}</div>
						<div class="tp-caption sfb tp-resizeme" data-x="center" data-hoffset="['0','0','0','0']" data-y="center" data-voffset="['100','100','100','80']" data-fontsize="['16','16','16','14']" data-lineheight="['16','16','16','14']" data-start="2000" data-transform_idle="o:1;"data-transform_in="x:right;s:1500;e:Power3.easeOut;"data-transform_out="x:right;s:1000;e:Power2.easeIn;"data-splitin="none"data-splitout="none" >
							<a href="{{url($val->url)}}" style="" class="banner-btn">查看详情<i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</li>
					@endforeach
				</ul>
				<div class="tp-bannertimer" style="height: 6px; background-color: rgba(0, 0, 0, 0.14902);top:0px;"></div>
			</div>
		</div>
	</div>
	<div class="met-index-service met-index-body">
		<div class="container services-bg">
			<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="#" title="我们的服务" target='_self'>我们的服务</a></h3>
			<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">为您的爱家提供专业的装修服务</p>
			<div class="row">
				<div class="col-lg-6 col-md-12" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
					<a href="{{url($ser->url1)}}" title="{{$ser->name1}}" target='_self'>
						<div class="services-box" >
							<img data-original="{{$ser->picture1}}"  title="{{$ser->name1}}" alt="{{$ser->name1}}" >
							<div class="content">
								<h4>{{$ser->name1}}</h4>
								<p>{{$ser->content1}}</p>
							</div>
						</div>
					</a>
					<a href="{{url($ser->url2)}}" title="{{$ser->name2}}" target='_self'>
						<div class="services-box" >
							<img data-original="{{asset($ser->picture2)}}"  title="{{$ser->name2}}" alt="{{$ser->name2}}" >
							<div class="content">
								<h4>{{$ser->name2}}</h4>
								<p>{{$ser->content2}}</p>
							</div>
						</div>
					</a>
				</div>
				<div class='col-lg-6 col-md-12'>
					<a href="{{url($ser->url3)}}" title="{{$ser->name3}}" target='_self'>
						<div class="services-box" >
							<img data-original="{{asset($ser->picture3)}}"  title="{{$ser->name3}}" alt="{{$ser->name3}}" >
							<div class="content">
								<h4>{{$ser->name3}}</h4>
								<p>{{$ser->content3}}</p>
							</div>
						</div>
					</a>
					<a href="{{url($ser->url4)}}" title="{{$ser->name4}}" target='_self'>
						<div class="services-box" >
							<img data-original="{{asset($ser->picture4)}}"  title="{{$ser->name4}}" alt="{{$ser->name4}}" >
							<div class="content">
								<h4>{{$ser->name4}}</h4>
								<p>{{$ser->content4}}</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="met-index-about met-index-body">
		<div class="container-fluid">
			<div class="left_side "   data-bg="templates/zstyle/min/img/about_bg.jpg" bg-repeat="false">
				<div class="we_are_opacity">
					<div class="we_are_border">
						<h2>We are E.s.t 2005</h2>
					</div>
				</div>
			</div>
			<div class="right_side"   data-plugin="appear" data-animate="fade" data-repeat="false">
				<div class="we_are_deatails">
					<h2><a href="{{url('/company')}}"  title="关于我们"  target='_self'>关于我们</a></h2>
					<p><p>&nbsp; &nbsp; &nbsp; {{$com->bre}}</p>
				</div>
			</div>
		</div>
	</div>
	<div class="met-index-product met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="product.html" title="项目活动" target='_self'>项目活动</a></h3>
			<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">我们有强大的服务团队，为企业提供一对一订制服务</p>
			<div class="row">
				<div class="col-md-12">
					<ul class="owl-carousel">
						@foreach($active as $val)
						<li class="project-item ">
							<a href="{{url('newsInf',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
								<div class="project-img">
									<img class="owl-lazy" data-src="{{asset($val->pic)}}" alt="{{$val->title}}" class="cover-image">
								</div>
								<div class="project-intro">
									<h4 class="project-title">{{$val->title}}</h4>
									<div class="project-descr">{{$val->introduction}}</div>
								</div>
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="met-index-case met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="case.html" title="装修案例" target='_self'>装修案例</a></h3>
			<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">我们整理了部分客户案例供您欣赏</p>
		</div>
		<ul class="nav nav-tabs invisible daohang"  data-plugin="appear" data-animate="fade" data-repeat="false">
			<li class="active">
				<a href="#" title="全部" data-toggle="tab" data-num='10' data-filter="*">全部</a>
			</li>
			@foreach($caseType as $val)
			<li>
				<a href="#" title="{{$val->title}}" data-toggle="tab" data-filter="list_{{$val->id}}">{{$val->title}}</a>
			</li>
			@endforeach
		</ul>

		<ul class="blocks no-space blocks-xlg-5 blocks-md-5 blocks-sm-3 blocks-xs-2" id="caselist">

			@foreach($caseList as $val)
			<li data-type="list_{{$val->type}}" class="project-item">
				<div class="widget widget-shadow">
					<figure class="widget-header cover">
						<a href="{{url('showproduct',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
							<div class="project-img">
								<img  data-original="{{asset($val->pic1)}}" alt="{{$val->title}}" class="cover-image">
							</div>
							<div class="project-intro">
								<h4 class="project-title">{{$val->title}}</h4>
								<div class="project-descr">{{$val->content}}</div>
							</div>
						</a>
					</figure>
				</div>
			</li>
			@endforeach
		</ul>
	</div>

	<div class="met-index-news met-index-body">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="news.html" title="新闻中心" target='_self'>新闻中心</a></h3>
			<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">最新行业新闻资讯</p>

			<div class="row">
				@foreach($artList as $val)
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 single-blog-post"  data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
					<div class="img-holder">
						<img class="cover-image" data-original="{{asset($val->pic)}}"  alt="{{$val->title}}" title="{{$val->title}}">
						<div class="overlay">
							<a href="{{url('newsInf',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
								<div class="overlays">
								</div>
							</a>
						</div>
						{{--<div class="date">--}}
							{{--<b>17</b> <br> Sep--}}
						{{--</div>--}}
					</div>
					<ul>
						<li><span>admin</span></li>
						<li><p><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{{$val->looked}}</p></li>
					</ul>
					<a href="{{url('newsInf',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'><h2>{{$val->title}}</h2></a>
					<p>{{$val->introduction}}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div class="met-index-cases met-index-body"    data-bg="templates/zstyle/min/img/cases_bg.jpg" bg-repeat="false">
		<div class="container">
			<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="product.html" title="设计团队" target='_self'>设计团队</a></h3>
			<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">我们有强大的服务团队，为企业提供一对一订制服务</p>
			<div class="owl-carousel" data-plugin="appear" data-animate="fade" data-repeat="false">
				@foreach($teamList as $val)
				<div class="item">
					<div class="testimonials">
						<div class="testimonials-content">
							<h3>{{$val->post}}</h3>
							<p>{{$val->brief}}</p>
						</div>

						<div class="testimonials-author">
							<img  class="owl-lazy" data-src="{{asset($val->photo)}}"  title="{{$val->name}}" alt="{{$val->name}}"  height="299" >
							<span class="t-mgr30"> {{$val->name}} </span>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<div  class="met-index-bottomcontact met-index-body"  >
		<div class="container">
			<div class="row">

				<div class="partner col-lg-6 col-md-6">
					<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="news.html"  title="公司地址"  target='_self'>公司地址</a></h3>
					<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false"> 欢迎更多的公司成为我们的合作伙伴</p>
					<div class="row">
						<iframe src="/map" style="border: none;width: 100%;height: 311px;"></iframe>
					</div>
				</div>

				<div class="get_touch col-lg-6 col-md-5 col-sm-12 col-xs-12">
					<h3 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false"><a href="feedback.html"  title="给我们留言"  target='_self'>给我们留言</a></h3>
					<p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false"> 如果您有什么建议，请立即联系我</p>
						<div class="form-group">
							<div>
								<input name='name' id="name" class='form-control' type='text' placeholder='姓名 ' autocomplete='off' data-fv-notempty="true" data-fv-message="不能为空" />
							</div>
						</div>
						<div class="form-group">
							<div>
								<input name='phone' id="phone" class='form-control' type='text' placeholder='电话 ' autocomplete='off'  />
							</div>
						</div>
						<div class="form-group">
							<div>
								<textarea name='mark' id="mark" class='form-control' data-fv-notempty="true" data-fv-message="不能为空" placeholder='留言内容 ' rows='5' style="resize: none;"></textarea>
							</div>
						</div>
						<div class="clear"></div>
						<button type="button" id="add" class="submit btn-squared">提交留言<i class="fa fa-arrow-circle-right"></i></button>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('publicJs')
	@parent
@endsection
@section('js')
	<script type="text/javascript" src="{{asset('js/admin/lib/layer/2.4/layer.js')}}"></script>
	<script>
        //表单验证
        $("#add").click(function () {
            var name = $("#name").val();
            var phone = $("#phone").val();
            var mark = $("#mark").val();

            if(!name || !phone || !mark){
                layer.alert('请完善信息！',{icon:5});
            }else{
                $.ajax({
                    url:"{{url('addCus')}}",
                    type:"post",
                    data:{
                        'name':name,'phone':phone,'mark':mark
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function(data){
                        if(data=='添加成功'){
                            layer.alert(data,{icon:1},function () {
                                parent.window.location.reload();
                            });
                        }else{
                            layer.alert(data,{icon:5});
                        }
                    }
                })
            }
        })
	</script>
@endsection