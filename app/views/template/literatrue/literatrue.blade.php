@extends("layout.literatrue")
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
    <div class="m-litera_recom f-cb">
        <h4 class="u-recom_title"><span>精选推荐</span></h4>
        <div class="g-litera_recom_slider f-fl">
            @include("widget.litera_recom_slider.litera_recom_slider")
        </div>
        <div class="g-litera_recom-list f-fr">
            @include("widget.litera_recom_list.litera_recom_list")
        </div>
    </div>
    <div class="m-litera_articles">
        <h4 class="u-articles_title"><span>文学</span></h4>
        <ul class="u-menus f-cb">
            <li><a href="">小说</a></li>
            <li><a href="">经管</a></li>
            <li><a href="">童话</a></li>
            <li><a href="">宠物</a></li>
            <li><a href="">我要上传</a></li>
        </ul>
        @include("widget.litera_list.litera_list")
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
    {{HTML::style("public/css/template/literatrue/literatrue.css")}}
@stop

{{--script--}}
@section("html5js")
    {{HTML::script("public/js/lib/html5shiv-printshiv.min.js")}}
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/literatrue/literatrue.js")])}}
@stop
