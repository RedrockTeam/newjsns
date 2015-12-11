@extends("layout.bkmv_sub")

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
        @include("widget.bkmv_sub_detail.bkmv_sub_detail")
        @include("widget.bkmv_sub_comment.bkmv_sub_comment")
    </div>
    <div class="g-right f-fr">
        @include("widget.bkmv_sub_recom.bkmv_sub_recom")
    </div>
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
    {{HTML::style("css/lib/base.css")}}
    {{HTML::style("css/lib/function.css")}}
    {{HTML::style("css/template/bkmv_sub/bkmv_sub.css")}}
@stop
{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
    </script>
@stop
@section("script")
    {{HTML::script("js/lib/require.js", ["data-main" => url("js/template/bkmv_sub/bkmv_sub.js")])}}
@stop