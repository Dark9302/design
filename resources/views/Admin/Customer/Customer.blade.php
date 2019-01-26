@extends('Admin.Base')
@section('css')
    @parent
    <style type="text/css">
        .mt-20{margin-top:7px;}
        .page-container{padding-top: 0px;padding-bottom: 0px;}
    </style>
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        用户反馈
        <span class="c-gray en">&gt;</span>
        用户反馈
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <!--<div class="text-c">
            <form action="#" method="get">
                <input type="text" name="article" id="article" placeholder="请输入文章名称/ID/关键词" style="width:250px" class="input-text">
                <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜文章</button>
            </form>
        </div>-->
        <div class="mt-20">
            <table class="table table-border table-bordered table-bg table-hover table-sort">
                <thead>
                <tr class="text-c">
                    <th width="80">ID</th>
                    <th width="80">姓名</th>
                    <th width="80">联系方式</th>
                    <th width="100">登记时间</th>
                    <th width="300">留言</th>
                </tr>
                </thead>
                <tbody>
                @if($num != 0)
                    @foreach($list as $val)
                        <tr class="text-c">
                            <td>{{$val->id}}</td>
                            <td class="text-c">{{$val->name}}</td>
                            <td class="text-c">{{$val->phone}}</td>
                            <td>{{$val->time}}</td>
                            <td>{{$val->mark}}</td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-c">
                        <td colspan="5">暂时没有记录！</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
    </block>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
    <script type="text/javascript">
        $(function(){
            $("#tab-system").Huitab({
                index:0
            });
        });
        $('.table-sort').dataTable({
            "aaSorting": [[ 0, "desc" ]],//默认第几个排序
        });
    </script>
@endsection