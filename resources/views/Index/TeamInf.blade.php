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
                    	<img src={{url('/upload/x1474449689.jpg')}} alt='张莹莹' style="width: 100%;"/>
                        <p class='text-center sheji'>张莹莹</p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 met-shownews-body">
                <div class="row">
                    <div class="met-shownews-header">
                        <h3 class="mcl">人物简介</h3>
                        <div class="info">
							<span class="guanzhu">在职：10年</span>
                            <span class="guanzhu">职务：专家设计师</span>
                            <span class="guanzhu"><i class="icon wb-eye margin-right-5" aria-hidden="true"></i>关注度：233</span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
                        <div>
                        	<p class="teaminfo">
                        		<span class="teaminfo_text">
                        			毕业院校：1998年毕业于河北工艺美院，2001年毕业于河北大学艺术学院，2006年研修清美，2013年荣获河北省最佳户型设计奖......
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
                        			精彩设计源于生活，我们为您设计的是一种真正的属于自己的生活方式或是说一种生活状态，而非单一的去表达某种风格。
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
                        			现代、简欧、新中式
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
							<li data-type="list_29" class="project-item">
								<div class="widget widget-shadow">
									<figure class="widget-header cover">
										<a href="showcase.html" title="公寓" target='_self'>
											<div class="project-img">
												<img  src="upload/x1474122847.jpg" alt="公寓" class="cover-image">
											</div>
											<div class="project-intro">
												<div class="project-descr">本案为精装公寓交楼标准样板房展示，实用面积仅为45平方，一房一厅，一厨一卫，独立生活阳台。以简约低调奢华的手法来展示当代都市白领们的高雅气质很生活品味，以人为本..</div>
											</div>
										</a>
									</figure>
								</div>
							</li>
							<li data-type="list_29" class="project-item">
								<div class="widget widget-shadow">
									<figure class="widget-header cover">
										<a href="showcase.html" title="公寓" target='_self'>
											<div class="project-img">
												<img  src="upload/x1474122847.jpg" alt="公寓" class="cover-image">
											</div>
											<div class="project-intro">
												<div class="project-descr">本案为精装公寓交楼标准样板房展示，实用面积仅为45平方，一房一厅，一厨一卫，独立生活阳台。以简约低调奢华的手法来展示当代都市白领们的高雅气质很生活品味，以人为本..</div>
											</div>
										</a>
									</figure>
								</div>
							</li>
							<li data-type="list_29" class="project-item">
								<div class="widget widget-shadow">
									<figure class="widget-header cover">
										<a href="showcase.html" title="公寓" target='_self'>
											<div class="project-img">
												<img  src="upload/x1474122847.jpg" alt="公寓" class="cover-image">
											</div>
											<div class="project-intro">
												<div class="project-descr">本案为精装公寓交楼标准样板房展示，实用面积仅为45平方，一房一厅，一厨一卫，独立生活阳台。以简约低调奢华的手法来展示当代都市白领们的高雅气质很生活品味，以人为本..</div>
											</div>
										</a>
									</figure>
								</div>
							</li>
							<li data-type="list_29" class="project-item">
								<div class="widget widget-shadow">
									<figure class="widget-header cover">
										<a href="showcase.html" title="公寓" target='_self'>
											<div class="project-img">
												<img  src="upload/x1474122847.jpg" alt="公寓" class="cover-image">
											</div>
											<div class="project-intro">
												<div class="project-descr">本案为精装公寓交楼标准样板房展示，实用面积仅为45平方，一房一厅，一厨一卫，独立生活阳台。以简约低调奢华的手法来展示当代都市白领们的高雅气质很生活品味，以人为本..</div>
											</div>
										</a>
									</figure>
								</div>
							</li>
						</ul>
					</div>
                    <div class="met-shownews-footer">
                        <ul class="pager pager-round">
                            <li class="previous ">
                                <a href="showcase.html" title="医院大厅">上一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：医院大厅</span>
                                </a>
                            </li>
                            <li class="next disabled">
                                <a href="#" title="没有了">下一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：没有了</span>
                                </a>
                            </li>
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