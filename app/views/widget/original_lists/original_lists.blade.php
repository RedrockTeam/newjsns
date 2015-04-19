@foreach($data['navigation'] as $key => $nav)
    <dl class="m-ori_print_lists g-lists f-cb">
        <dt class="u-ori_header f-cb">
            <span class="s-title">{{$nav['type']}}</span>
            <span class="u-link_more"><a href="?type_id={{$nav['id']}}" class="js-open_model">更多</a></span>
        </dt>

        @foreach($data['main'][$key] as $work)
            <dd class="u-list_item">
                <a href="passage_id={{$work['id']}}&type_id={{$work['type_id']}}">
                    <div style="background-image: url('{{$work["cover_url"]}}')" class="u-img_show"></div>
                    <span class="u-list_name">{{$work['title']}}</span>
                </a>
            </dd>
        @endforeach
    </dl>
@endforeach
@section("css")
    @parent
    {{HTML::style("public/css/widget/original_lists/original_lists.css")}}
@stop