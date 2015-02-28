<div class="m-microm_hot">
    <h4 class="u-microm_hot_h">热门标签</h4>
    @foreach($data['navigation'] as $key => $nav)
    <dl class="u-tag_book f-cb">
        <dt><a href="">[{{$nav['type']}}]</a></dt>
        @foreach($data['tags'][$key] as $tag)
        <dd><a href="{{$tag['id']}}">{{$tag['tag']}}</a></dd>
        @endforeach
    </dl>
    @endforeach
    {{--<dl class="u-tag_movie f-cb">--}}
        {{--<dt><a href="">[电影]</a></dt>--}}
        {{--<dd><a href="">文学</a></dd>--}}
        {{--<dd><a href="">小说</a></dd>--}}
        {{--<dd><a href="">童话</a></dd>--}}
        {{--<dd><a href="">励志</a></dd>--}}
        {{--<dd><a href="">青春</a></dd>--}}
        {{--<dd><a href="">经济管理</a></dd>--}}
        {{--<dd><a href="">散文</a></dd>--}}
    {{--</dl>--}}
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/bookm_topic/bookm_topic.css")}}
@stop