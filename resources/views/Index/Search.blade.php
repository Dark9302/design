@extends('Index.Base')
@section('css')
    @parent
@endsection
@section('content')
    <section class="met-search animsition">
        <div class="container">
            <div class="row">
                <div class="met-search-body">
                    <form method='get' class="page-search-form" role="search" action='{{url('/search')}}'>
                        <div class="input-search input-search-dark">
                            <button type="submit" class="input-search-btn"><i class="icon wb-search"
                                                                              aria-hidden="true"></i></button>
                            <input
                                    type="text"
                                    class="form-control input-lg"
                                    name="val"
                                    id="val"
                                    value="{{$value}}"
                                    placeholder="请输入搜索关键词！"
                                    data-fv-notempty="true"
                                    data-fv-message="不能为空">
                        </div>
                    </form>
                    <ul class="list-group list-group-full list-group-dividered met-page-ajax">
                        @foreach($res as $val)
                            <li class="list-group-item">
                                <h4>
                                    <a href="{{url('newsInf',array('id'=>$val->id))}}">
                                        {{$val->title}}
                                    </a>
                                </h4>
                                </a>
                                <p>{{$val->introduction}}</p>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('publicJs')
    @parent
@endsection
@section('js')
@endsection