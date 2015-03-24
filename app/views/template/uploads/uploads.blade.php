@extends("layout.uploads")
@section("form")
    @if( $page_pos == 0 )
        @include("widget.upload_photo.upload_photo")
    @elseif( $page_pos == 1 )
        @include("widget.upload_movie.upload_movie")
    @else
        @include("widget.upload_passage.upload_passage")
    @endif
@stop
{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/uploads/uploads.css")}}
    {{HTML::style("public/css/lib/bootstrap.min.css")}}
    {{HTML::style("public/complexPlugin/uploadify/uploadify.css")}}
@stop
{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/uploads/uploads.js")])}}
@stop