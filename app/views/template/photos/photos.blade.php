@extends("layout.photos")
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
    <h4 class="u-photos_title"><span>爱拍</span></h4>
    <ul class="m-but f-cb">
        <li class="s-active"><a href="">人像</a></li>
        <li><a href="">风景</a></li>
        <li><a href="">lEMO</a></li>
        <li><a href="">宠物</a></li>
        <li><a href="">观念</a></li>
        <li><a href="">其他</a></li>
        <li><a href="">最热</a></li>
        <li><a href="">我要上传</a></li>
    </ul>
    @include("widget.photos_list.photos_list")
@stop

{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop

{{--login_box--}}
@section("login_box")
    @include("widget.login_box.login_box")
@stop

{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/photos/photos.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/photos/photos.js")])}}
@stop
