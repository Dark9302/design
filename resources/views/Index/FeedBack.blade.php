@extends('Index.LeftBase')
@section('css')
    @parent
@endsection
@section('content')
    <div class="met-banner-econy" style="background-color:;">
        <img src="upload/1474296568.jpg">
        <div class="econynr">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>在线反馈</h1>
                    </div>
                    <div class="breadcumb">
                        <i class="fa fa-home"></i>
                        <a href="{{url('/')}}" title="首页">首页</a> &gt;
                        <a href="{{url('/company')}}">关于我们</a> >
                        <a href="{{url('/feedback')}}">在线反馈</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('eontent')
    <ul class="met-column-nav-ul">
        <li class="dropdown">
            <a href="{{url('/company')}}" title="公司简介" class="link ">公司简介</a>
        </li>
        <li class="dropdown">
            <a href="{{url('/cutural')}}" title="企业文化" class="link ">企业文化</a>
        </li>
        <li class="dropdown">
            <a href="{{url('/process')}}" title="装修流程" class="link ">装修流程</a>
        </li>
        <li class="dropdown">
            <a href="{{url('/feedback')}}" title="在线反馈" class="link active">在线反馈</a>
        </li>
        <li class="dropdown">
            <a href="{{url('/contact')}}" title="联系我们" class="link ">联系我们</a>
        </li>
    </ul>
@endsection
@section('dontent')
    <h4>关于我们<span class="sidebaran glyphicon glyphicon-th-list"></span></h4>
    <ul class="category_item met_aside_list">
        <li>
            <a href="{{url('/company')}}" title="公司简介" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;公司简介</a>
        </li>
        <li>
            <a href="{{url('/cutural')}}" title="企业文化" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;企业文化</a>
        </li>
        <li>
            <a href="{{url('/process')}}" title="装修流程" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;装修流程</a>
        </li>
        <li>
            <a href="{{url('/feedback')}}" class='active' title="在线反馈" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;在线反馈</a>
        </li>
        <li>
            <a href="{{url('/contact')}}" title="联系我们" target='_self'><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;联系我们</a>
        </li>
    </ul>
@endsection
@section('bontent')
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="section-title-style">
            <h2>在线反馈</h2>
        </div>

        <section class="met-feedback animsition">
            <div class="container">
                <div class="row">
                    <div class="met-feedback-body">
                        <div class="form-group">
                            <div>
                                <input name='name' id="name" class='form-control' type='text' placeholder='姓名 ' autocomplete='off'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <input name='phone' id="phone" class='form-control' type='text' placeholder='电话 ' autocomplete='off'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                                <textarea name='mark' id="mark" class='form-control' data-fv-notempty="true" placeholder='留言内容 ' rows='5' style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="form-group margin-bottom-0">
                            <button type="button" id="add" class="btn btn-primary btn-block btn-squared">提交</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/admin/lib/layer/2.4/layer.js')}}"></script>
    <script>
        //表单验证
        $("#add").click(function () {
            var name = $("#name").val();
            var phone = $("#phone").val();
            var mark = $("#mark").val();

            if(!name || !phone || !mark){
                layer.alert('请完善信息！',{icon:5});
            }else{
                $.ajax({
                    url:"{{url('addCus')}}",
                    type:"post",
                    data:{
                        'name':name,'phone':phone,'mark':mark
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType:"json",
                    success:function(data){
                        if(data=='添加成功'){
                            layer.alert(data,{icon:1},function () {
                                parent.window.location.reload();
                            });
                        }else{
                            layer.alert(data,{icon:5});
                        }
                    }
                })
            }
        })
    </script>
@endsection