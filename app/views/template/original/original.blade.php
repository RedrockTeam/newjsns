@extends("layout.original")
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

{{--login_box--}}
@section("login_box")
    @include("widget.login_box.login_box")
@stop

{{--container--}}
@section("container")
    <h4 class="u-original_title"><span>原味</span></h4>
    <div class="g-left f-fl">
        @include("widget.original_lists.original_lists")
    </div>
    <div class="g-right f-fr">
        @include("widget.original_tags.original_tags")
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
    {{HTML::style("public/css/template/original/original.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/original/original.js")])}}
@stop
