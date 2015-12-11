@extends("layout.login-register")

{{--login-register-case--}}
@section("login-register-case")
    @include("widget.login-register-case.login-register-case")
@stop


{{--css--}}
@section("css")
    {{HTML::style("css/lib/base.css")}}
    {{HTML::style("css/lib/function.css")}}
    {{HTML::style("css/template/login-register/login-register.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
        alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
        location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/login-register/login-register.js")])}}
@stop
