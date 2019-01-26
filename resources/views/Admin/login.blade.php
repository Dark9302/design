<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{asset('js/admin/lib/html5shiv.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/admin/lib/respond.min.js')}}"></script>
	<![endif]-->
	<link href="{{asset('js/admin/static/h-ui/css/H-ui.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('js/admin/static/h-ui.admin/css/H-ui.login.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('js/admin/static/h-ui.admin/css/style.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('js/admin/lib/Hui-iconfont/1.0.8/iconfont.css')}}" rel="stylesheet" type="text/css" />
	<!--[if IE 6]>
	<script type="text/javascript" src="{{asset('js/admin/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>后台登录</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<style>
		label.error{
			position: absolute;
			right: -22px;
			top: 5px;
			color: #ef392b;
			font-size: 12px;
		}
		.loginBox{
			height: 245px;
		}
	</style>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
	<div id="loginform" class="loginBox">
		<form class="form form-horizontal" action="{{url('admin/index')}}" method="post" id="form">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
				<div class="formControls col-xs-8">
					<input id="loginName" name="loginName" type="text" placeholder="账户" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
				<div class="formControls col-xs-8">
					<input id="loginPwd" name="loginPwd" type="password" placeholder="密码" class="input-text size-L">
				</div>
			</div>
			<div class="row cl">
				<div class="formControls col-xs-8 col-xs-offset-3">
					<input name="" type="button" id="confirm" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
					<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="footer"></div>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/static/h-ui/js/H-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
</body>
</html>
<script type="text/javascript" src="{{asset('js/admin/lib/layer/2.4/layer.js')}}"></script>
<script>
	$("#confirm").click(function () {
		//获取输入的用户名和密码
		var name = $("#loginName").val();
		var pwd = $("#loginPwd").val();
        $.ajax({
            url:"{{url('admin/checkLogin')}}",
            type:"post",
            data:{
                'name':name,'pwd':pwd
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType:"json",
            success:function(data){
                if(data=='success'){
                    $("form").submit();
                }else{
                    layer.alert('账号或密码错误！',{icon:5});
                }
            }
        })
    });
</script>