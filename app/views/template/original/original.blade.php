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
{{--@section("login_box")
    @include("widget.login-register-case.login-register-case")
@stop--}}
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
{{--music_player--}}
@section("music_player")
@include("widget.music_player.music_player")
@stop
{{--model--}}
@section("model")
@include("widget.ori_model.ori_model")
@stop
{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop
{{--css--}}
@section("css")
    {{HTML::style("css/lib/base.css", [], true)}}
    {{HTML::style("css/lib/function.css", [], true)}}
    {{HTML::style("css/template/original/original.css", [], true)}}
    {{HTML::style("css/lib/font-awesome.min.css", [], true)}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/original/original.js", [], true)], true)}}
@stop
