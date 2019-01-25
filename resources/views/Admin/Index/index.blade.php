@extends('Admin.Base')
@section('css')
    @parent
@endsection
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
       首页管理
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <form class="form form-horizontal" id="form-article-add">
            <div id="tab-system" class="HuiTab">
                <div class="tabBar cl">
                    <span>幻灯片更换</span>
                    <span>我们的服务</span>
                </div>
                <div class="tabCon">
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">大标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">小标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">背景图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                     <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">大标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">小标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">背景图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">大标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">小标题：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">背景图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                </div>
                <div class="tabCon">
                	<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务一名称：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                	<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务一简介：</label>
		            	<div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
							<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>
							<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
						</div>
					</div>
					<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务一封图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务一链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务二名称：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                	<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务二简介：</label>
		            	<div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
							<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>
							<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
						</div>
					</div>
					<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务二封图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务二链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务三名称：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                	<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务三简介：</label>
		            	<div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
							<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>
							<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
						</div>
					</div>
					<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务三封图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务三链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
                    	</div>
                    </div>
                    <hr style="width: 91%; margin: 33px auto;" />
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务四名称：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                            <input type="text" class="input-text">
                        </div>
                    </div>
                	<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务四简介：</label>
		            	<div class="formControls col-xs-8 col-sm-9" style="margin-bottom: 10px;">
							<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"></textarea>
							<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
						</div>
					</div>
					<div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务四封图：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="file" value="" placeholder="">
                    	</div>
                    </div>
                    <div class="row cl">
	                    <label class="form-label col-xs-4 col-sm-2">服务四链接：</label>
	                    <div class="formControls col-xs-8 col-sm-9">
                    		<input type="text" class="input-text">
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
@endsection