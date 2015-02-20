@extends("layout.micromovie")

{{--top_bar--}}
@section("top_bar")
    @include("widget.top_bar.top_bar")
@stop

{{--header--}}
@section("header")
    @include("widget.header.header")
@stop

{{--footer--}}
@section("footer")
    @include("widget.footer.footer")
@stop

{{--container--}}
@section("container")
    <h4 class="u-micro_title"><span>精选推荐</span></h4>
    <ul class="m-but f-cb">
        @foreach($data['navigation'] as $nav)
            <li><a href="">{{$nav['type']}}</a></li>
        @endforeach
        <li><a href="">最热</a></li>
        <li class="s-active"><a href="">我要上传</a></li>
    </ul>
    <div class="g-left f-fl ">
        @include("widget.microm_list.microm_list")
    </div>
    <div class="g-right f-fr">
        @include("widget.microm_topic.microm_topic")
    </div>
@stop

{{--login_box--}}
@section("login_box")
    @include("widget.login_box.login_box")
@stop

{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop
{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/micromovie/micromovie.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/micromovie/micromovie.js")])}}
@stop
