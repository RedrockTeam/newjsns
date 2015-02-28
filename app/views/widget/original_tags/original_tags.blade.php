<div class="m-original_tag">
    <h4 class="u-original_tag_h">热门标签</h4>
    @foreach($data['navigation'] as $key => $nav)
        <dl class="u-tag_book f-cb">
            <dt><a href="">[{{$nav['type']}}]</a></dt>
            @foreach($data['tags'][$key] as $tag)
                <dd><a href="{{$tag['id']}}">{{$tag['tag']}}</a></dd>
            @endforeach
        </dl>
    @endforeach
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/original_tags/original_tags.css")}}
@stop