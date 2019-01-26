@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-add" enctype="multipart/form-data" method="post">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>大标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="title1" id="title1">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>小标题：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="title2" id="title2">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>连接地址：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="url" id="url">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">添加图片：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="file" value="" placeholder="" name="pic" id="pic">
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
                title1:{
                    required : true
                },title2:{
                    required : true
                },url:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var title1 = $("#title1").val();
                var title2 = $("#title2").val();
                var url = $("#url").val();
                $(form).ajaxSubmit({
                    url:"doAddPic",
                    type:"post",
                    data:{
                        'title1':title1,'title2':title2,'url':url
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function(data){
                        if(data=='添加成功'){
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