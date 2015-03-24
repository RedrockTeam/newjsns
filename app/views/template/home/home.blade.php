@extends("layout.home")
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
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/home/home.js")])}}
@stop
