@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-add" enctype="multipart/form-data" method="post">
            <input type="hidden" id="id" name="id" value="{{$job->id}}">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>招聘职务：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->position}}" placeholder="" name="position" id="position">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>招聘人数：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->number}}" placeholder="" name="number" id="number">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>工作地点：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->address}}" placeholder="" name="address" id="address">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>薪资待遇：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->salary}}" placeholder="" name="salary" id="salary">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>联系邮箱：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->email}}" placeholder="" name="email" id="email">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>QQ：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$job->qq}}" placeholder="" name="qq" id="qq">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">招聘详情：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="jobInf" id="jobInf" cols="" rows="" class="textarea" style="height:400px;width:100%;">{{$job->infomation}}</textarea>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>保存</button>
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
    @parent
    <script charset="utf-8" src="{{asset('kindeditor/kindeditor-min.js')}}"></script>
    <script charset="utf-8" src="{{asset('kindeditor/lang/zh_CN.js')}}"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="artInf"]', {
                allowFileManager : true,
                resizeType:0,
                afterBlur: function(){this.sync();}
            });
        });

        //表单验证
        $("#article-add").validate({
            rules:{
                position:{
                    required : true
                },number:{
                    required : true
                },address:{
                    required : true
                },salary:{
                    required : true
                },email:{
                    required : true
                },qq:{
                    required : true
                },jobInf:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var id = $("#id").val();
                var position = $("#position").val();
                var number = $("#number").val();
                var address = $("#address").val();
                var salary = $("#salary").val();
                var email = $("#email").val();
                var qq = $("#qq").val();
                var jobInf = $("#jobInf").val();
                $(form).ajaxSubmit({
                    url:"{{url('admin/doEditJob')}}",
                    type:"post",
                    data:{
                        'id':id,'position':position,'number':number,'address':address,'salary':salary,
                        'email':email,'qq':qq,'infomation':jobInf
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function(data){
                        if(data=='修改成功'){
                            parent.window.location.reload();
                        }else{
                            layer.alert(data,{icon:5});
                        }
                    }
                })
            }
        })
    </script>
@endsection