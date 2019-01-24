@extends('Index.Base')
@section('css')
	@parent
    <link rel="stylesheet" href="{{asset('css/teaminfo.css')}}" />
@endsection
@section('content')
<section class="met-shownews animsition">
    <div class="container">
        <div class="row">
            <div class="col-md-3 met-shownews-body">
                <div class="row">
                    <div class="lazyload clearfix">
                    	<img src="{{url($des->photo)}}" alt='{{$des->name}}' style="width: 100%;"/>
                        <p class='text-center sheji'>{{$des->name}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 met-shownews-body">
                <div class="row">
                    <div class="met-shownews-header">
                        <h3 class="mcl">人物简介</h3>
                        <div class="info">
							<span class="guanzhu">在职：{{$des->work_year}}</span>
                            <span class="guanzhu">职务：{{$des->post}}</span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
                        <div>
                        	<p class="teaminfo">
                        		<span class="teaminfo_text">
									{{$des->brief}}
                        		</span>
                        	</p>
                        </div>
                    </div>
                    <div class="met-shownews-header">
                        <div class="info">
                        	<span class="team_title">设计理念</span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
						<div>
                        	<p class="teaminfo">
                        		<span class="teaminfo_text">
                        			{{$des->design_concept}}
                        		</span>
                        	</p>
                        </div>                    
                    </div>
                    <div class="met-shownews-header">
                        <div class="info">
                        	<span class="team_title">擅长风格</span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
						<div>
                        	<p class="teaminfo">
                        		<span class="teaminfo_text">
                        			{{$des->style}}
                        		</span>
                        	</p>
                        </div>                    
                    </div>
                    <div class="met-shownews-header">
                        <div class="info">
                        	<span class="team_title">代表作品</span>
                        </div>
                    </div>
                    <div class="met-index-product met-index-body">
						<ul class="blocks-sm-3 blocks-xs-2" id="caselist">
							@foreach($case as $val)
							<li data-type="list_29" class="project-item">
								<div class="widget widget-shadow">
									<figure class="widget-header cover">
										<a href="{{url('showproduct',array('id'=>$val->id))}}" title="{{$val->title}}" target='_self'>
											<div class="project-img">
												<img  src="{{asset($val->pic1)}}" alt="{{$val->title}}" class="cover-image">
											</div>
											<div class="project-intro">
												<div class="project-descr">{{$val->content}}</div>
											</div>
										</a>
									</figure>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
                    <div class="met-shownews-footer">
                        <ul class="pager pager-round">
							@if($per)
                            <li class="previous ">
                                <a href="{{url('teaminf',array('id'=>$per->id))}}" title="{{$per->name}}">上一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$per->name}}</span>
                                </a>
                            </li>
							@else
							<li class="previous disabled">
								<a href="#" title="没有了">上一篇
									<span aria-hidden="true" class='hidden-xs hidden-sm'>：没有了</span>
								</a>
							</li>
							@endif
							@if($next)
                            <li class="next">
                                <a href="{{url('teaminf',array('id'=>$next->id))}}" title="{{$per->name}}">下一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$per->name}}</span>
                                </a>
                            </li>
							@else
							<li class="next disabled">
								<a href="#" title="没有了">下一篇
									<span aria-hidden="true" class='hidden-xs hidden-sm'>：没有了</span>
								</a>
							</li>
							@endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('publicJs')
	@parent
@endsection
@section('js')
@endsection