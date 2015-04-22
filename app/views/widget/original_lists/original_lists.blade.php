@foreach($data['navigation'] as $key => $nav)
    <dl class="m-ori_print_lists g-lists f-cb">
        <dt class="u-ori_header f-cb">
            <span class="s-title">{{$nav['type']}}</span>
            <span class="u-link_more"><a href="?type_id={{$nav['id']}}">更多</a></span>
        </dt>

        @foreach($data['main'][$key] as $work)
            <dd class="u-list_item">
                <a href="passage_id={{$work['id']}}&type_id={{$work['type_id']}}"  class="@if($work['type_id'] == 16 || $work['type_id'] == 17){{"js-open_model"}}@endif" data-type_id="{{$work['type_id']}}" data-passage_id="{{$work['id']}}" data-love_num="{{$work['love_num']}}" data-intro="{{$work['introduce']}}" data-author="{{$work['author']}}" data-uid="{{$work['uid']}}">
                    <div style="background-image: url('{{$work["cover_url"]}}')" class="u-img_show js-bac_url" data-url="{{$work["cover_url"]}}"></div>
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