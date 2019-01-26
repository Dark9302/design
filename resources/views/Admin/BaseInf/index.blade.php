@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        基本信息管理
        <span class="c-gray en">&gt;</span>
        公司简介
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-article-add">
            <span style="display: none;" id="id">{{$comInf->id}}</span>
            <div id="tab-system" class="HuiTab">
                <div class="tabBar cl">
                    <span>基本信息</span>
                    <span>联系我们</span>
                    <span>公司简介</span>
                    <span>公司文化</span>
                    <span>装修流程</span>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            网站名称：
                        </label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="webTitle" name="webTitle" placeholder="控制在25个字、50个字节以内" value="{{$comInf->web_title}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            关键词：
                        </label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="webKeywords" name="webKeywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="{{$comInf->web_keyword}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            描述：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="webDes" name="webDes" placeholder="空制在80个汉字，160个字符以内" value="{{$comInf->web_description}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            底部版权信息：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="webCopyright" name="webCopyright" placeholder="&copy; 2016 H-ui.net" value="{{$comInf->web_copyright}}" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">备案号：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="webIcp" name="webIcp" placeholder="京ICP备00000000号" value="{{$comInf->web_icp}}" class="input-text">
                        </div>
                    </div>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">公司名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" value="{{$comInf->name}}" name="name" id="name" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">地址：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" value="{{$comInf->address}}" name="address" id="address" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">电话：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="{{$comInf->phone}}" name="phone" id="phone">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="{{$comInf->email}}" id="email" name="email" >
                        </div>
                    </div>
                </div>
                <div class="tabCon">
		            <div class="row cl">
		            	<label class="form-label col-xs-4 col-sm-2">公司简介摘要：</label>
		            	<div class="formControls col-xs-8 col-sm-9">
							<textarea name="indBrief" id="indBrief" cols="" rows="" class="textarea"  placeholder="说点什么...600个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,600)">{{$comInf->index_brief}}</textarea>
							<p class="textarea-numberbar"><em class="textarea-length">0</em>/600</p>
						</div>
					</div>
					<div class="row cl">
		                <label class="form-label col-xs-4 col-sm-2">公司简介：</label>
		                <div class="formControls col-xs-8 col-sm-9">
		                    <textarea name="comInf" id="comInf" cols="" rows="" class="textarea" style="height:400px;width:100%;">{{$comInf->brief}}</textarea>
		                </div>
		            </div>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">公司文化：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea name="comCulture" id="comCulture" cols="" rows="" class="textarea" style="height:400px;width:100%;">{{$comInf->culture}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">装修流程：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea name="process" id="process" cols="" rows="" class="textarea" style="height:400px;width:100%;">{{$comInf->process}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                    <button class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                </div>
            </div>
        </form>
    </div>
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
    <script type="text/javascript" src="{{asset('js/admin/lib/layer/2.4/layer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/admin/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>
    <script charset="utf-8" src="{{asset('kindeditor/kindeditor-min.js')}}"></script>
    <script charset="utf-8" src="{{asset('kindeditor/lang/zh_CN.js')}}"></script>
    <script>
        var editor = [];
        KindEditor.ready(function(K) {
            editor[0] = K.create('textarea[name="comInf"]', {
                allowFileManager : true,
                resizeType:0,
                afterBlur: function(){this.sync();}
            });
            editor[1] =  K.create('textarea[name="comCulture"]', {
                allowFileManager : true,
                resizeType:0,
                afterBlur: function(){this.sync();}
            });
            editor[2] =  K.create('textarea[name="process"]', {
                allowFileManager : true,
                resizeType:0,
                afterBlur: function(){this.sync();}
            });
        });

        $("#form-article-add").validate({
            rules:{
                webTitle:{
                    required : true
                },webKeywords:{
                    required : true
                },webDes:{
                    required : true
                },webCopyright:{
                    required : true
                },webIcp:{
                    required : true
                },name:{
                    required : true
                },address:{
                    required : true
                },phone:{
                    required : true
                },email:{
                    required : true
                }
            },
            onkeyup:false,
            success:"valid",
            submitHandler:function(form){
                var id = $("#id").html();
                var webTitle = $("#webTitle").val();
                var webKeywords = $("#webKeywords").val();
                var webDes = $("#webDes").val();
                var webCopyright = $("#webCopyright").val();
                var webIcp = $("#webIcp").val();
                var name = $("#name").val();
                var address = $("#address").val();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var indBrief = $("#indBrief").val();
                var comInf = $("#comInf").val();
                var comCulture = $("#comCulture").val();
                var process = $("#process").val();
                $(form).ajaxSubmit({
                    url:"{{url('admin/upCom')}}",
                    type:"post",
                    data:{
                        'id':id,'name':name,'index_brief':indBrief,'brief':comInf,'address':address,'phone':phone,'email':email,
                        'culture':comCulture,'process':process,'web_title':webTitle,'web_keyword':webKeywords,
                        'web_description':webDes,'web_copyright':webCopyright,'web_icp':webIcp
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