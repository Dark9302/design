@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-add" enctype="multipart/form-data" method="post">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>案例名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="caseName" id="caseName">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>案例简介：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="caseIntro" id="caseIntro" cols="" rows="3" class="textarea" style="width:100%;"></textarea>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>装修面积：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="area" id="area">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>价格：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="price" id="price">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>地址：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="address" id="address">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>案例类型：</label>
                <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
                    <select name="caseType" id="caseType" class="select">
                        @foreach($type as $val)
                        <option value="{{$val->id}}">{{$val->title}}</option>
                        @endforeach
                    </select>
				</span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>设计师ID：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" readonly name="caseTeam" placeholder="请点击该框选择设计师" id="caseTeam">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>案例图片：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="file" value="" placeholder="" name="casePic1" id="artPic1">
                    <input type="file" value="" placeholder="" name="casePic2" id="artPic2">
                    <input type="file" value="" placeholder="" name="casePic3" id="artPic3">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>案例详情：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="caseInf" id="caseInf" cols="" rows="" class="textarea" style="height:400px;width:100%;"></textarea>
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
            editor = K.create('textarea[name="caseInf"]', {
                allowFileManager : true,
                resizeType:0,
                afterBlur: function(){this.sync();}
            });
        });

        /*根据课程类型和机构编号选择课程*/
        $("#caseTeam").click(function(){
            layer_show("选择设计师","{{url('admin/selectDes')}}",'800','500');
        })
        //表单验证
        $("#article-add").validate({
            rules:{
                caseName:{
                    required : true
                },caseIntro:{
                    required : true
                },area:{
                    required : true
                },caseType:{
                    required : true
                },caseInf:{
                    required : true
                },price:{
                    required : true
                },address:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var caseName = $("#caseName").val();
                var caseIntro = $("#caseIntro").val();
                var caseType = $("#caseType").val();
                var area = $("#area").val();
                var caseInf = $("#caseInf").val();
                var caseTeam = $("#caseTeam").val();
                var price = $("#price").val();
                var address = $("#address").val();
                $(form).ajaxSubmit({
                    url:"doAddCase",
                    type:"post",
                    data:{
                        'title':caseName,'information':caseInf,'content':caseIntro,'type':caseType,
                        'area':area,'caseTeam':caseTeam,'price':price,'address':address
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