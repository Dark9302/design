@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        首页管理
        <span class="c-gray en">&gt;</span>
        首页服务
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-article-add">
            <div id="tab-system" class="HuiTab">
                <div class="tabCon">
                    <input type="hidden" id="id" name="id" value="{{$ser->id}}">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务一名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="name1" name="name1" value="{{$ser->name1}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务一简介：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
                            <textarea name="content1" id="content1" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)">{{$ser->content1}}</textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务一封图：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="file" id="picture1" name="picture1" value="" placeholder="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务一链接：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="url1" name="url1" value="{{$ser->url1}}" class="input-text">
                        </div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务二名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="name2" name="name2" value="{{$ser->name2}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务二简介：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
                            <textarea name="content2" id="content2" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)">{{$ser->content2}}</textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务二封图：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="file" id="picture2" name="picture2" value="" placeholder="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务二链接：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="url2" name="url2" value="{{$ser->url2}}" class="input-text">
                        </div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务三名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="name3" name="name3" value="{{$ser->name3}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务三简介：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
                            <textarea name="content3" id="content3" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)">{{$ser->content3}}</textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务三封图：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="file" id="picture3" name="picture3" value="" placeholder="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务三链接：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="url3" name="url3" value="{{$ser->url3}}" class="input-text">
                        </div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务四名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="name4" name="name4" value="{{$ser->name4}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务四简介：</label>
                        <div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
                            <textarea name="content4" id="content4" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)">{{$ser->content4}}</textarea>
                            <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务四封图：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="file" id="picture4" name="picture4" value="" placeholder="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">服务四链接：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="url4" name="url4" value="{{$ser->url4}}" class="input-text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                    <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $("#tab-system").Huitab({
                index:0
            });
        });

        //表单验证
        $("#form-article-add").validate({
            rules:{
                name1:{
                    required : true
                },content1:{
                    required : true
                },url1:{
                    required : true
                },name2:{
                    required : true
                },content2:{
                    required : true
                },url2:{
                    required : true
                },name3:{
                    required : true
                },content3:{
                    required : true
                },url3:{
                    required : true
                },name4:{
                    required : true
                },content4:{
                    required : true
                },url4:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var id = $('#id').val();
                var name1 = $("#name1").val();
                var content1 = $("#content1").val();
                var url1 = $("#url1").val();
                var name2 = $("#name2").val();
                var content2 = $("#content2").val();
                var url2 = $("#url2").val();
                var name3 = $("#name3").val();
                var content3 = $("#content3").val();
                var url3 = $("#url3").val();
                var name4 = $("#name4").val();
                var content4 = $("#content4").val();
                var url4 = $("#url4").val();
                $(form).ajaxSubmit({
                    url:"doEditSer",
                    type:"post",
                    data:{
                        'id':id,'name1':name1,'content1':content1,'url1':url1,'name2':name2,
                        'content2':content2,'url2':url2,'name3':name3,'content3':content3,'url3':url3,
                        'name4':name4,'content4':content4,'url4':url4
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function(data){
                        if(data=='保存成功'){
                            layer.alert(data,{icon:1});
                        }else{
                            layer.alert(data,{icon:5});
                        }
                    }
                })
            }
        })
    </script>
@endsection