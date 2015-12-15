<div class="m-microm_hot">
    <h4 class="u-microm_hot_h">热门标签</h4>
    @foreach($data['category'] as $key => $nav)
        <dl class="u-tag_book f-cb">
            <dt><a href="bookmovie?type_id={{$nav['id']}}">[{{$nav['type']}}]</a></dt>
            @foreach($data['tags'][$key] as $tag)
            <dd><a href="bookmovietag?type_id={{$nav['id']}}&tag={{$tag['tag']}}">{{$tag['tag']}}</a></dd>
            @endforeach
        </dl>
    @endforeach
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/bookm_topic/bookm_topic.css", [], true)}}
@stop