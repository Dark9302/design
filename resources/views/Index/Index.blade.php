<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>中医治未病系统</title>
		<meta name="_token" content="{{ csrf_token() }}"/>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="{{asset('css/newcss/base.css')}}" />
		<link rel="stylesheet" href="{{asset('css/newcss/menu.css')}}" />
		<link rel="stylesheet" href="{{asset('css/newcss/index.css')}}" />
		<script type="text/javascript" src="{{asset('js/newjs/jquery.js')}}" ></script>
		<script type="text/javascript" src="{{asset('js/newjs/submenu.js')}}" ></script>
		<style>
			#logout{cursor:pointer;}
		</style>
	</head>
	<body>
		<div class="container clearfix">
			<div class="header clearfix">
				<span class="logo fl"></span>
				<ul class="fl menu" id="lists">
					@foreach($title as $v)
						<li class="tree">
							<a>{{ $v['parameter'] }}</a>
							<div class="down">
								@foreach($vals as $val)
									@if($v['id']==$val['p_id'])
					         			<a href="{{url($val['value'])}}" target="myiframe">{{ $val['parameter'] }}</a>
					         		@endif
					         	@endforeach
							</div>
						</li>
					@endforeach
				</ul>
				<div class="fr doctor">
					<span class="fl overflow_hidden">{{ session('wh_userName') }}</span>
					<i class="fl iconfont" id="logout">&#xe86e;</i>
				</div>
			</div>
			<div class="content clearfix" id="iframediv">
				<iframe name="myiframe" src="{{ url($vals[0]['value']) }}" frameborder="no" border="0" scrolling="no" onload="this.height=this.contentWindow.document.documentElement.scrollHeight"></iframe>
			</div>
		</div>
	</body>
	<script>
		//限制鼠标右键
	    document.oncontextmenu=new Function("event.returnValue=false;");
	    //退出
	    $('#logout').click(function(){
	        //清除缓存标识
            localStorage.removeItem('vis');
	        location.href = "/out";
	    });
	</script>
</html>
