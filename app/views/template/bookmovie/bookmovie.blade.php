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
    <div class="m-menu">
        <div class="u-sort-movie f-pr">电影 <span class="s-tangle"></span></div>
        <div class="u-sort-hot">最热</div>
        <div class="u-upload">我要上传</div>
    </div>
    <div class="g-left f-fl">
        @include("widget.bookm_list.bookm_list")
    </div>
    <div class="g-right f-fr">
        @include("widget.bookm_topic.bookm_topic")
{{--        @include("widget.bookm_comments.bookm_comments")--}}
    </div>
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