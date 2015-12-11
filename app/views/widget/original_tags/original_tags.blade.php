<div class="m-original_tag">
    <h4 class="u-original_tag_h">热门标签</h4>
    @foreach($data['category'] as $key => $nav)
        <dl class="u-tag_book f-cb">
            <dt><a href="original?type_id={{$nav['id']}}">[{{$nav['type']}}]</a></dt>
            @foreach($data['tags'][$key] as $tag)
                <dd><a href="originaltag?type_id={{$nav['id']}}&tag={{$tag['tag']}}">{{$tag['tag']}}</a></dd>
            @endforeach
        </dl>
    @endforeach
</div>

@section("css")
    @parent
    {{HTML::style("css/widget/original_tags/original_tags.css")}}
@stop