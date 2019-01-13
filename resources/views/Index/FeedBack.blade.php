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
                        <h1>在线反馈</h1>
                    </div>
                    <div class="breadcumb">
                        <i class="fa fa-home"></i> <a href="index.html" title="首页">首页</a> &gt; <a href="about.html" >关于我们</a> > <a href="feedback.html">在线反馈</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
		<li>
			<a href="about.html" class="link" title="关于我们">关于我们</a>
		</li>

		<li class="dropdown">

			<a href="about.html" title="公司简介" class="link ">公司简介</a>

		</li>

		<li class="dropdown">

			<a href="/cutural" title="企业文化" class="link ">企业文化</a>

		</li>

		<li class="dropdown">

			<a href="about.html" title="装修流程" class="link ">装修流程</a>

		</li>

		<li class="dropdown">

			<a href="/feedback" title="在线反馈" class="link active">在线反馈</a>

		</li>

		<li class="dropdown">

			<a href="contact.html" title="联系我们" class="link ">联系我们</a>

		</li>

	</ul>
@endsection
@section('dontent')
<h4>关于我们<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
	<ul class="category_item met_aside_list">

		<li>
			<a href="about.html"  title="公司简介" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;公司简介</a>

		</li>

		<li>
			<a href="/cutural" title="企业文化" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;企业文化</a>

		</li>

		<li>
			<a href="about.html" title="装修流程" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修流程</a>

		</li>

		<li>
			<a href="/feedback"  class='active' title="在线反馈" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;在线反馈</a>

		</li>

		<li>
			<a href="contact.html" title="联系我们" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联系我们</a>

		</li>

	</ul>
@endsection
@section('bontent')
                <div class="col-md-9 col-xs-12 pull-right">
                    <div class="section-title-style">
                        <h2>在线反馈</h2>
                    </div>

                    <section class="met-feedback animsition">
                        <div class="container">
                            <div class="row">
                                <div class="met-feedback-body">
                                    <form method='POST' class="met-form met-form-validation" enctype="multipart/form-data" action='#'>
                                        <input type='hidden' name='lang' value='cn' />


                                        <div class="form-group">

                                            <div>
                                                <input name='para30' class='form-control' type='text' placeholder='姓名 ' autocomplete='off' data-fv-notempty="true" data-fv-message="不能为空" />
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div>
                                                <input name='para31' class='form-control' type='text' placeholder='电话 ' autocomplete='off'  />
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div>
                                                <input name='para32' class='form-control' type='text' placeholder='Email ' autocomplete='off'  />
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div>
                                                <input name='para33' class='form-control' type='text' placeholder='其他联系方式 ' autocomplete='off'  />
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div>
                                                <textarea name='para34' class='form-control' data-fv-notempty="true" data-fv-message="不能为空" placeholder='留言内容 ' rows='5'></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="input-group input-group-icon">
                                                <input
                                                        name='code'
                                                        type="text"
                                                        class="form-control"
                                                        placeholder = "验证码"
                                                        data-fv-notempty = "true"
                                                        data-fv-message = "不能为空"
                                                >
                                                <span class="input-group-addon">
							<img
                                    src="upload/yzm.png"
                                    data-url="upload/yzm.png"
                                    class="met-form-codeimg"
                                    alt="看不清？点击更换验证码"
                                    title="看不清？点击更换验证码"
                            />
						</span>
                                            </div>
                                        </div>


                                        <div class="form-group margin-bottom-0">
                                            <button type="submit" class="btn btn-primary btn-block btn-squared">提交</button>
                                        </div>
                                    </form>			</div>
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