<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('css')
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery/1.9.1/jquery.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('js/admin/lib/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/PIE_IE678.js')}}"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('js/admin/static/h-ui/css/H-ui.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/admin/static/h-ui.admin/css/H-ui.admin.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/admin/lib/Hui-iconfont/1.0.8/iconfont.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/admin/static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
    <link rel="stylesheet" type="text/css" href="{{asset('js/admin/static/h-ui.admin/css/style.css')}}" />
    <!--[if IE 6]>
    <script type="text/javascript" src="{{asset('js/admin/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--限制右键功能-->
    <script>
        document.oncontextmenu=new Function("event.returnValue=false;");
    </script>
    @show
    <title>后台</title>
</head>
<body>
@yield('content')
</body>
</html>
@section('js')
<script type="text/javascript" src="{{asset('js/admin/lib/layer/2.4/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/static/h-ui/js/H-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/static/h-ui.admin/js/H-ui.admin.js')}}"></script>

<script type="text/javascript" src="{{asset('js/admin/lib/My97DatePicker/4.8/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/datatables/1.10.0/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/admin/lib/laypage/1.2/laypage.js')}}"></script>
<script type="text/javascript" src="{{asset('js/public.js')}}"></script>
@show