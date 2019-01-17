@extends('Index.RightBase')
@section('css')
	@parent
@endsection
@section('content')
<section class="met-shownews animsition">
	<div class="container">
		<div class="row">
            <div class="col-md-9 met-shownews-body">
                <div class="row">
                    <div class="met-shownews-header">
                        <h1>{{$inf->title}}</h1>
                        <div class="info">
                        <span>{{$inf->time}}</span>
                        <span>
                            <i class="icon wb-eye margin-right-5" aria-hidden="true"></i>{{$inf->looked}}
                        </span>
                        </div>
                    </div>
                    <div class="met-editor lazyload clearfix">
                        <div>
                            <img src="{{url($inf->pic)}}" alt="">
                            {{$inf->content}}
                            <div id="metinfo_additional"></div>
                        </div>
                        <div class="center-block met_tools_code"></div>
                    </div>
                    <div class="met-shownews-footer">

                        <ul class="pager pager-round">
                            @if($pre)
                            <li class="previous ">
                                <a href="{{url('newsInf',['id'=>$pre->id])}}" title="{{$pre->title}}">
                                    上一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$pre->title}}</span>
                                </a>
                            </li>
                            @endif
                            @if($next)
                            <li class="next ">
                                <a href="{{url('newsInf',['id'=>$next->id])}}" title="{{$next->title}}">
                                    下一篇
                                    <span aria-hidden="true" class='hidden-xs hidden-sm'>：{{$next->title}}</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
@endsection
@section('publicJs')
	@parent
@endsection
@section('js')
@endsection