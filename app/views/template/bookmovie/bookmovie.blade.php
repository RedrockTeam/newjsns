@extends("layout.bookmovie")

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
    <h4 class="u-bkmv_title"><span>读书影逝</span></h4>
    <menu class="m-menu">
        @foreach($data['navigation'] as $nav)
            <li {{$nav['active'] ? 's-active' : ''}}><a href="bookmovie?type_id={{$nav['id']}}">{{$nav['type']}}</a></li>
        @endforeach
    </menu>
    <div class="g-left f-fl">
        @include("widget.bookm_list.bookm_list")
    </div>
    <div class="g-right f-fr">
        @include("widget.bookm_topic.bookm_topic")
    </div>
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
    {{HTML::style("css/template/bookmovie/bookmovie.css", [], true)}}
@stop
{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/bookmovie/bookmovie.js", [], true)], true)}}
@stop