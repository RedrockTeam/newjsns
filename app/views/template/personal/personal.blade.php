@extends("layout.personal")
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
    <div class="g-left f-fl">
        <a href="{{route('home/uploads')}}" class="u-link_uploads">我要上传作品</a>
        @include("widget.personal_info.personal_info")
    </div>
    <div class="g-right f-fr">
        @include("widget.personal_tabs.personal_tabs")
        @include("widget.personal_history.personal_history")
    </div>
@stop

{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop
{{--css--}}
@section("css")
    {{HTML::style("css/lib/base.css")}}
    {{HTML::style("css/lib/function.css")}}
    {{HTML::style("css/template/personal/personal.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script(URL::asset("js/lib/require.js"), ["data-main" => URL::asset("js/template/personal/personal.js")])}}
@stop
