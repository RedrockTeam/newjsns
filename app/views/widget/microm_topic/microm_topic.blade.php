<div class="m-micro_tags">
    <h4 class="u-tag_tip">热门标签</h4>
        @foreach($data['category'] as $key => $nav)
            <dl class="f-cb">
                <dt><a href="micromovie?type_id={{$nav['id']}}">[{{$nav['type']}}]</a></dt>
                @foreach($data['tags'][$key] as $tag)
                    <dd><a href="micromovietag?type_id={{$nav['id']}}&tag={{$tag['tag']}}">{{$tag['tag']}}</a></dd>
                @endforeach
            </dl>
        @endforeach
</div>

@section("css")
    @parent
    {{HTML::style("css/widget/microm_topic/microm_topic.css")}}
@stop