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
    <div class="m-menu">
        <div class="u-sort-book">读书</div>
        <div class="u-sort-movie">影逝</div>
    </div>
    <div class="g-left">
        @include("widget.bookm_list.bookm_list")
    </div>
    <div class="g-right">
        @include("widget.bookm_topic.bookm_topic")
        @include("widget.bookm_comments.bookm_comments")
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