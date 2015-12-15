@extends("layout.uploads")
@section("form")
     @include("widget.upload_photo.upload_photo")
     @include("widget.upload_movie.upload_movie")
     @include("widget.upload_passage.upload_passage")
     @include("widget.upload_ori.upload_ori")
@stop
{{--css--}}
@section("css")
    {{HTML::style("css/lib/base.css", [], true)}}
    {{HTML::style("css/lib/function.css", [], true)}}
    {{HTML::style("css/template/uploads/uploads.css", [], true)}}
    {{HTML::style("css/lib/bootstrap.min.css", [], true)}}
    {{HTML::style("complexPlugin/uploadify/uploadify.css", [], true)}}
@stop
{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script(URL::asset("js/lib/require.js"), ["data-main" => URL::asset("js/template/uploads/uploads.js", true)], true)}}
@stop