@extends('Admin.Layout')
@section('css')
    @parent
    <link rel="stylesheet" href="{{asset('kindeditor/themes/default/default.css')}}" />
@endsection
@section('content')
    <div class="page-container">
        <form class="form form-horizontal" id="article-add" enctype="multipart/form-data" method="post">
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章名称：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" class="input-text" value="" placeholder="" name="artName" id="artName">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label>
                <div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
                    <select name="artType" id="artType" class="select">
                        <option value="1">公司新闻</option>
                        <option value="2">行业动态</option>
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
    </script>
@endsection