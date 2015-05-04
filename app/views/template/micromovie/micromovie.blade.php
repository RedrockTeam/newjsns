@extends("layout.micromovie")

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
    <h4 class="u-micro_title"><span>精选推荐</span></h4>
    <ul class="m-but f-cb">
        @foreach($data['category'] as $nav)
            <li><a href="micromovie?type_id={{$nav['id']}}">{{$nav['type']}}</a></li>
        @endforeach
        <li><a href="">最热</a></li>
        <li class="s-active"><a href="{{route('home/uploads')}}">我要上传</a></li>
    </ul>
    <div class="g-left f-fl ">
        @include("widget.microm_list.microm_list")
    </div>
    <div class="g-right f-fr">
        @include("widget.microm_topic.microm_topic")
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
    {{HTML::style("public/css/lib/base.css")}}
    {{HTML::style("public/css/lib/function.css")}}
    {{HTML::style("public/css/template/micromovie/micromovie.css")}}
@stop

{{--script--}}
@section("html5js")
    <script type="text/javascript">
            alert("为了你的浏览体验，请升级您的IE或者使用其他现代浏览器。\n现在为你跳转到红岩官网");
            location.href = "http://hongyan.cqupt.edu.cn/";
        </script>
@stop
@section("script")
    {{HTML::script("public/js/lib/require.js", ["data-main" => url("public/js/template/micromovie/micromovie.js")])}}
@stop
