@extends('Admin.Layout')
@section('css')
    @parent
@endsection
@section('content')
    <div class="mt-20">
        <form action="" id="desSelect" method="post">
            <table class="table table-border table-bordered table-bg table-hover table-sort">
                <thead>
                <tr class="text-c">
                    <th width="40"><input name="" type="checkbox" value=""></th>
                    <th width="80">ID</th>
                    <th width="100">设计师名称</th>
                </tr>
                </thead>
                <tbody>
                @if($num != '0')
                    @foreach($list as $val)
                    <tr class="text-c">
                        <td><input name="" type="checkbox" class="chec"></td>
                        <td>{{$val->id}}</td>
                        <td>{{$val->name}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr class="text-c">
                        <td colspan="3">请先添加设计师！</td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class="cl pd-5 mt-20">
                <div style="text-align: center;">
                    <button class="btn btn-primary radius" type="button" style="margin-right:10px;" id="tijiao">
                        <i class="Hui-iconfont">&#xe615;</i>确定
                    </button>
                    <button class="btn btn-danger radius" style="margin-left:15px;" id="quxiao">
                        <i class="Hui-iconfont">&#xe60b;</i>取消
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    @parent
    <script>
        $("#quxiao").click(function(){
            layer_close();
        });
        var idn='';
        $("#tijiao").click(function(){
            $(".chec").each(function(){
                if($(this).is(":checked")){
                    /*组合设计师id*/
                    var id=$(this).parent('td').next('td').html();
                    idn += id+',';
                }
            })
            var ids=idn.substring(0,idn.length-1);
            $("#caseTeam", parent.document).val(ids);
            layer_close();
        })
    </script>
@endsection