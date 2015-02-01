@extends("layout.discuss")
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
    <div class="u-tag">最热</div>
    <div class="u-release">我要发言</div>
</div>
<div class="g-left">
    @include("widget.discuss_list.discuss_list")
</div>
<div class="g-right">
    @include("widget.discuss_topic.discuss_topic")
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
{{HTML::style("public/css/template/discuss/discuss.css")}}
@stop

{{--script--}}
@section("html5js")
{{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
{{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/discuss/discuss.js")])}}
@stop
