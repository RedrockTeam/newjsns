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
        @foreach($data as $nav)
            <li {{$nav['active'] ? 's-active' : ''}}><a href="photos?type_id={{$nav['id']}}">{{$nav['type']}}</a></li>
        @endforeach
        <li><a href="{{route('home/uploads')}}">我要上传</a></li>
    </ul>
    @include("widget.photos_list.photos_list")
@stop

{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop

{{--login_box--}}
@section("login_box")
    @include("widget.login-register-case.login-register-case")
@stop

{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/photos/photos.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/photos/photos.js")])}}
@stop
