<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('css')
        <link rel="stylesheet" href="{{asset('css/newcss/base.css')}}" />
        <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}">
    @show
    <title>中医治未病系统</title>
</head>
<body class="minWidth bgw">
    @yield('content')
</body>
</html>
{{--公共js--}}
@section('publicJs')
    <script type="text/javascript" src="{{asset('js/newjs/jquery.js')}}" ></script>
    <script type="text/javascript" src="{{asset('layui/layui.all.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/pinyin.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/json2.js')}}" ></script>
@show
{{--日期js--}}
@section('dateJs')
    <!--日期插件 start-->
    <script type="text/javascript" src="{{asset('layui/lay/modules/laydate.js')}}"></script>
    <!--日期插件 end-->
@show
{{--私有js--}}
@section('js')
@show
<script>
    //限制鼠标右键
    //document.oncontextmenu=new Function("event.returnValue=false;");
</script>
