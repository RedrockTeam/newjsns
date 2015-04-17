@extends("layout.imageUpload")

{{--container--}}
@section("container")
    @include("widget.imageForm.imageForm")
@stop

{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/lib/bootstrap.min.css")}}
    {{HTML::style("public/css/lib/bootstrap-theme.min.css")}}
    {{HTML::style("public/css/template/imageUpload/imageUpload.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script(URL::asset("public/js/lib/require.js"), ["data-main" => URL::asset("public/js/template/imageUpload/imageUpload.js")])}}
@stop
