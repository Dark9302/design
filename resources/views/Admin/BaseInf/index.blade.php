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
            <div id="tab-system" class="HuiTab">
                <div class="tabBar cl">
                    <span>公司信息</span>
                    <span>联系我们</span>
                    <span>关于我们</span>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            网站名称：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-title" placeholder="控制在25个字、50个字节以内" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            关键词：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-Keywords" placeholder="5个左右,8汉字以内,用英文,隔开" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            描述：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-description" placeholder="空制在80个汉字，160个字符以内" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            css、js、images路径配置：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-static" placeholder="默认为空，为相对路径" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            上传目录配置：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-uploadfile" placeholder="默认为uploadfile" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">
                            <span class="c-red">*</span>
                            底部版权信息：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-copyright" placeholder="&copy; 2016 H-ui.net" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">备案号：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="website-icp" placeholder="京ICP备00000000号" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">统计代码：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <textarea class="textarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tabCon">
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮件发送模式：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text"  class="input-text" value="" name="">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">SMTP服务器：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">SMTP 端口：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="25" name="" >
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮箱帐号：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text" value="5" id="emailName" name="emailName" >
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">邮箱密码：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="password" id="email-password" value="" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-4 col-sm-2">收件邮箱地址：</label>
                        <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" id="email-address" value="" class="input-text">
                        </div>
                    </div>
                </div>
                <div class="tabCon">
                    <div class="row cl">
		                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>维护类型：</label>
		                <div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
		                    <select name="artType" id="artType" class="select">
		                        <option value="1">公司简介</option>
		                        <option value="2">公司文化</option>
		                        <option value="3">装修流程</option>
		                    </select>
						</span>
		                </div>
		            </div>
		            <div class="row cl">
		                <label class="form-label col-xs-4 col-sm-2">文章内容：</label>
		                <div class="formControls col-xs-8 col-sm-9">
		                    <textarea name="artInf" id="artInf" cols="" rows="" class="textarea" style="height:400px;width:100%;"></textarea>
		                </div>
		            </div>
                </div>
            </div>
            <div class="row cl">
                <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
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
    <script type="text/javascript">
        $(function(){
            $("#tab-system").Huitab({
                index:0
            });
        });
    </script>
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
    </script>
@endsection