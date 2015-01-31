@extends("layout.home")
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
    @include("widget.square.square")
@stop

{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/home/home.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("js/template/home/home.js")])}}
@stop
