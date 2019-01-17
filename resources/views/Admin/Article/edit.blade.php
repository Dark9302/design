@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-edit" enctype="multipart/form-data" method="post">
            <div class="row cl">
                <input type="hidden" value="{{$art->id}}" id="id">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$art->title}}" placeholder="" name="artName" id="artName">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章简介：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="{{$art->introduction}}" placeholder="" name="artIntr" id="artIntr">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
                <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
                    <select name="artType" id="artType" class="select">
                        @if($art->type == 1)
                            <option value="1" selected>公司新闻</option>
                            <option value="2">行业动态</option>
                            <option value="3">装修小常识</option>
                        @elseif($art->type == 2)
                            <option value="1">公司新闻</option>
                            <option value="2" selected>行业动态</option>
                            <option value="3">装修小常识</option>
                        @else
                            <option value="1">公司新闻</option>
                            <option value="2">行业动态</option>
                            <option value="3" selected>装修小常识</option>
                        @endif
                    </select>
				</span>
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章大图：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="file" value="" placeholder="" name="artPic" id="artPic">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <textarea name="artInf" id="artInf" cols="" rows="" class="textarea" style="height:400px;width:100%;">{{$art->content}}</textarea>
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
        $("#article-edit").validate({
            rules:{
                artName:{
                    required : true
                }, artIntr:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var id = $("#id").val();
                var artName = $("#artName").val();
                var artIntr = $("#artIntr").val();
                var artType = $("#artType").val();
                var artInf = $("#artInf").val();
                $(form).ajaxSubmit({
                    url:"{{url('admin/doEdit')}}",
                    type:"post",
                    data:{
                        'id':id,'title':artName,'introduction':artIntr,'content':artInf,'type':artType
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