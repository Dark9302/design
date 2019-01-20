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
					<h1>公司简介</h1>
				</div>
				<div class="breadcumb">
					<i class="fa fa-home"></i>
					<a href="{{url('/')}}" title="首页">首页</a> &gt;
					<a href="{{url('/company')}}">关于我们</a> >
					<a href="{{url('/company')}}">公司简介</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('eontent')
<ul class="met-column-nav-ul">
	<li class="dropdown">
		<a href="{{url('/company')}}" title="公司简介" class="link active">公司简介</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/cutural')}}" title="企业文化" class="link ">企业文化</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/process')}}" title="装修流程" class="link ">装修流程</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/feedback')}}" title="在线反馈" class="link ">在线反馈</a>
	</li>
	<li class="dropdown">
		<a href="{{url('/contact')}}" title="联系我们" class="link ">联系我们</a>
	</li>
</ul>
@endsection
@section('dontent')
<h4>关于我们<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
<ul class="category_item met_aside_list">
	<li>
		<a href="{{url('/company')}}" class='active' title="公司简介" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;公司简介</a>
	</li>
	<li>
		<a href="{{url('/cutural')}}" title="企业文化" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;企业文化</a>
	</li>
	<li>
		<a href="{{url('/process')}}" title="装修流程" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修流程</a>
	</li>
	<li>
		<a href="{{url('/feedback')}}" title="在线反馈" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;在线反馈</a>
	</li>
	<li>
		<a href="{{url('/contact')}}" title="联系我们" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联系我们</a>
	</li>
</ul>
@endsection
@section('bontent')
<div class="col-md-9 col-xs-12 pull-right">
	<div class="section-title-style">
		<h2>公司简介</h2>
	</div>

	<section class="met-show animsition">
		<div class="container">
			<div class="row">
				<div class="met-editor lazyload clearfix">
					<div>
						<p>&nbsp;</p>
						<p><img data-original="upload/1474095536.jpg" style="width: 300px;  float: right; padding: 0px 10px; " / alt="图片关键词">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;装饰有限公司成立于1997年，是以家装为主，涉足商装、建材等相关产业的专业性装饰公司。具有施工、设计双乙级资质。通过多年的努力，在业内外形成了良好的口碑。公司先后荣获"全国住宅装饰装修行业自律诚信单位"、"住宅装饰装修优秀企业"、"住宅装饰装修示范优秀奖等多项殊荣，并多次在家居装饰设计大赛中获奖。</p>
						<p><br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "优秀的设计、优良的工程、优质的服务"是的承诺，"创新力、凝聚力、想像力，为您打造新天地"是的口号。本着"价格透明化；施工标准化；工艺现代化；材料环保化；人员专业化；服务人性化"的六化原则，服务于每一位客户，致力打造客户满意的精品工程。在为您服务的是一个经过专业系统培训、时间经验丰富的团队，力求以专业的态度和一种持之以恒的精神完成每一个项目。公司汇集了各种设计流派且经验丰富的设计师，工艺精湛的施工队伍采用带薪制管理，全心全意为您构筑舒适温馨的家园。专业严谨的工程监理，随时监督工程质量，完善的服务体系，为您消除后顾之忧。<br/> &nbsp;
						</p>
						<p>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 公司凭借严格的管理、高水平的设计、精湛的施工和完善的售后服务深受广大客户的欢迎和信任。随着家装行业的快速发展，公司迅速的成长，不断深化人性化服务，推出"完整家居"理念。把装修从以往单纯提供家庭装修服务转变为提供家居产品服务，以风格化的设计理念、施工工艺、建筑材料和服务体系致力于为消费者打造健康和谐的人居。用风格来整合产品和服务，不仅让您体会到称心满意装修的服务，重要的是让您感受到装修带来的舒适的家居生活。</p>
						<p>

							&nbsp;</p>
						<p>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 多年来，公司装饰通过整合产业链资源，优化装饰设计与施工服务，构建了一个汇聚数千名专业人才的建筑装饰产业链条。公司用智慧提升设计，用品质保障施工，在建筑装饰市场赢得无数赞誉口碑。荣获"广东省著名商标"、"深圳老字号"、"深圳知名品牌"、"全国住宅装饰装修行业百强企业"、"中国建筑装饰行业AAA信用企业"、"改革开放30年全国住宅装饰装修行业最具影响力企业"等称号。公司积极参与国家推行的保障房建设项目，与国内知名房地产开发商合作，参与保障房建筑装饰设计与施工，以专业设计、精品施工赢得国家和政府好评，更屡次荣获"国际双年展奖"、"筑巢奖"、"金鹏奖"、"南山区政府质量奖"等奖项。多部作品在中央电视台《前沿》、《交换空间》等栏目中展播。目前，我们正在积极申报"中国驰名商标"、"中国建筑工程鲁班奖"等行业顶尖荣誉。未来，我们将在商务楼宇、星级酒店、工业地产、大型公共空间等领域持续精进。<br/> &nbsp;
						</p>
						<p>

							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 公司以不断探求，开拓创新，与时俱进的精神，全力打造中国一流家装企业。</p>
					</div>
				</div>
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