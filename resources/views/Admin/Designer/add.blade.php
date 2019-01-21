@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-add" enctype="multipart/form-data" method="post">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>姓名：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="desName" id="desName">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>职务：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="desPost" id="desPost">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>从业时间：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="year" id="year">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>上传头像：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="file" value="" placeholder="" name="photo" id="photo">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>擅长风格：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="style" id="style">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>个人简介：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="desIntro" id="desIntro" cols="" rows="3" class="textarea" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>设计理念：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="concept" id="concept" cols="" rows="" class="textarea" style="height:200px;width:100%;"></textarea>
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
        //表单验证
        $("#article-add").validate({
            rules:{
                desName:{
                    required : true
                },desPost:{
                    required : true
                },year:{
                    required : true
                },style:{
                    required : true
                },desIntro:{
                    required : true
                },concept:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var desName = $("#desName").val();
                var desPost = $("#desPost").val();
                var year = $("#year").val();
                var style = $("#style").val();
                var desIntro = $("#desIntro").val();
                var concept = $("#concept").val();
                $(form).ajaxSubmit({
                    url:"doAddDesigner",
                    type:"post",
                    data:{
                        'name':desName,'post':desPost,'work_year':year,'brief':desIntro,
                        'design_concept':concept,'style':style
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