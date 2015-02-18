@extends("layout.bookmovie")

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
    <h4 class="u-bkmv_title"><span>读书影逝</span></h4>
    <menu class="m-menu">
        <li class="u-sort-movie f-pr"><a href="">电影</a> <span class="s-tangle"></span></li>
        <li class="u-sort-hot"><a href="">最热</a></li>
        <li class="u-upload"><a href="">我要上传</a></li>
    </menu>
    <div class="g-left f-fl">
        @include("widget.bookm_list.bookm_list")
    </div>
    <div class="g-right f-fr">
        @include("widget.bookm_topic.bookm_topic")
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
    {{HTML::style("public/css/template/bookmovie/bookmovie.css")}}
@stop
{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/bookmovie/bookmovie.js")])}}
@stop