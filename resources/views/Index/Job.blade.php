@extends('Index.LeftBase')
@section('css')
    @parent
@endsection
@section('content')
    <div class="met-banner-econy" style="background-color:;">
        <img src="{{asset('upload/1474296568.jpg')}}">
        <div class="econynr">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>在线招聘</h1>
                    </div>
                    <div class="breadcumb">
                        <i class="fa fa-home"></i>
                        <a href="{{url('/')}}" title="首页">首页</a> &gt;
                        <a href="{{url('/job')}}">在线招聘</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bontent')
    <div class="col-md-9 col-xs-12 pull-right">
        <div class="section-title-style">
            <h2>在线招聘</h2>
        </div>

        <section class="met-job animsition">
            <div class="container">
                <div class="row">
                    <div class="met-job-list met-page-ajax">
                        @foreach($job as $val)
                        <div class="widget widget-article widget-shadow">
                            <div class="widget-body">
                                <h3 class="widget-title">
                                    {{$val->position}}
                                </h3>
                                <p class="widget-metas">
                                    {{$val->time}}
                                    <span class="margin-left-10">
                                        <i class="icon wb-map margin-right-5" aria-hidden="true"></i>{{$val->address}}
                                    </span>
                                    <span class="margin-left-10">
                                        <i class="icon wb-user margin-right-5" aria-hidden="true"></i>{{$val->number}}
                                    </span>
                                    <span class="margin-left-10">
                                        <i class="icon wb-payment margin-right-5" aria-hidden="true"></i>{{$val->salary}}
                                    </span>
                                </p>
                                <hr>
                                <div class="met-editor lazyload clearfix">
                                    {!! $val->infomation !!}
                                </div>
                                <hr>
                                <div class="widget-body-footer margin-top-0">
                                    <a class="btn btn-outline btn-squared btn-primary" href="mailto:{{$val->email}}"
                                       title="投递邮箱：{{$val->email}}">投递简历</a>
                                    <a class="btn btn-outline btn-squared btn-primary"
                                       href="http://wpa.qq.com/msgrd?v=3&uin={{$val->qq}}&site=qq&menu=yes"
                                       title="客服QQ：{{$val->qq}}">QQ咨询</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div>
                        {{$job->links('vendor/pagination/customPage')}}
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
@endsection