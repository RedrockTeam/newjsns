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
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/bkmv_sub/bkmv_sub.css")}}
@stop
{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/bkmv_sub/bkmv_sub.js")])}}
@stop