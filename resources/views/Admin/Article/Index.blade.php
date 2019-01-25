@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        文章管理
        <span class="c-gray en">&gt;</span>
        文章管理
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        {{--<div class="text-c">--}}
            {{--<form action="#" method="get">--}}
                {{--<input type="text" name="article" id="article" placeholder="请输入文章名称/ID/关键词" style="width:250px" class="input-text">--}}
                {{--<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜文章</button>--}}
            {{--</form>--}}
        {{--</div>--}}
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l">
                <a href="javascript:;" onclick="delMore('delMoreArticle','chec')" class="btn btn-danger radius">
                    <i class="Hui-iconfont">&#xe6e2;</i> 批量删除
                </a>
                <a class="btn btn-primary radius" onClick="product_add('添加文章','addArticle')" href="javascript:;">
                    <i class="Hui-iconfont">&#xe600;</i> 添加文章
                </a>
            </span>
            <span class="r">共有数据：<strong id="strong">{{$num}}</strong> 条</span>
        </div>
        <div class="mt-20">
            <table class="table table-border table-bordered table-bg table-hover table-sort">
                <thead>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" name="" value=""></th>
                    <th width="80">ID</th>
                    <th width="100">标题</th>
                    <th width="80">分类</th>
                    <th width="120">发布时间</th>
                    <th width="75">浏览次数</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                @if($num != 0)
                    @foreach($list as $val)
                        <tr class="text-c">
                            <td><input type="checkbox" value="" class="chec" name=""></td>
                            <td>{{$val->id}}</td>
                            <td class="text-c">{{$val->title}}</td>
                            <td class="text-c">{{$val->type_name}}</td>
                            <td>{{$val->time}}</td>
                            <td>{{$val->looked}}</td>
                            <td class="f-14 td-manage">
                                <a style="text-decoration:none" class="ml-5" onClick="edit('文章编辑','editArticle/{{$val->id}}','10001')" href="javascript:;" title="编辑">
                                    <i class="Hui-iconfont">&#xe6df;</i>
                                </a>
                                <a style="text-decoration:none" class="ml-5" onClick="del(this,'{{$val->id}}','delArticle')" href="javascript:;" title="删除">
                                    <i class="Hui-iconfont">&#xe6e2;</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-c">
                        <td colspan="7">暂时没有记录！</td>
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
            $('.table-sort').dataTable({
                "aaSorting": [[ 1, "desc" ]]//默认第几个排序
            });
        });
    </script>
@endsection