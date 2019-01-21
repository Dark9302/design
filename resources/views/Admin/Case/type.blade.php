@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        案例管理
        <span class="c-gray en">&gt;</span>
        案例分类
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <div class="cl pd-5 bg-1 bk-gray mt-20">
            <span class="l">
                <a href="javascript:;" onclick="delMore('delMoreType','chec')" class="btn btn-danger radius">
                    <i class="Hui-iconfont">&#xe6e2;</i> 批量删除
                </a>
                <a class="btn btn-primary radius" onClick="product_add('添加分类','addType')" href="javascript:;">
                    <i class="Hui-iconfont">&#xe600;</i> 添加分类
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
                    <th width="100">分类名称</th>
                    <th width="100">类型</th>
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
                            @if($val->type == 1)
                            <td>装修风格</td>
                            @else
                            <td>文章分类</td>
                            @endif
                            <td class="f-14 td-manage">
                                <a style="text-decoration:none" class="ml-5" onClick="del(this,'{{$val->id}}','delType')" href="javascript:;" title="删除">
                                    <i class="Hui-iconfont">&#xe6e2;</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-c">
                        <td colspan="4">暂时没有记录！</td>
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
    </script>
@endsection