@extends("layout.litera_sub")

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
    @include("widget.litera_content.litera_content")
    @include("widget.bdshare.bdshare")
    @include("widget.litera_comment.litera_comment")
    {{--@include("widget.comment.comment")--}}
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
    {{HTML::style("css/lib/base.css", [], true)}}
    {{HTML::style("css/lib/function.css", [], true)}}
    {{HTML::style("css/template/litera_sub/litera_sub.css", [], true)}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/litera_sub/litera_sub.js", [], true)], true)}}
@stop