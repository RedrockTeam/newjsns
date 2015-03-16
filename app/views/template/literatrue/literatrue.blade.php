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
           @foreach($data['navigation'] as $value)
            <li><a href="home/literature?type_id={{$value['id']}}">{{$value['type']}}</a></li>
           @endforeach
            <li><a href="">我要上传</a></li>
        </ul>
        @include("widget.litera_list.litera_list")
    </div>
@stop

{{--go_top--}}
@section("go_top")
    @include("widget.go_top.go_top")
@stop
{{--css--}}
@section("css")
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/literatrue/literatrue.css")}}
    {{HTML::style("public/css/lib/font-awesome.min.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/literatrue/literatrue.js")])}}
@stop
