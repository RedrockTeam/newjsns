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
    {{HTML::style("/css/lib/base.css")}}
    {{HTML::style("/css/lib/function.css")}}
    {{HTML::style("/css/template/home/home.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/home/home.js")])}}
@stop
