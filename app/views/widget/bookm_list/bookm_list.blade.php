{{--读书影逝--}}
<div class="m-bkmv_lists">
    <ul class=f-cb">
    @foreach($data['recommendlist'] as $recommend)
        <li class="u-bkmv_item">
            <img src="{{$recommend['cover_url']}}" alt=""/>
            <div class="u-bkmv_info f-cb">
                <h5 class="u-bkmv_name">{{$recommend['title']}}</h5>
                <div class="u-user_action f-cb">
                    <div class="u-bkmv_comment">{{$recommend['comment_num']}}</div>
                    <div class="u-bkmv_love">{{$recommend['love_num']}}</div>
                </div>
            </div>
        </li>
    @endforeach
    </ul>
    {{--切换页面--}}
        <ul class="u-page_tabs f-cb">
            {{--@if($page_info['show_pages_length'] > 4)--}}
                {{--@for($i = $page_info['page_start']; $i < $page_info['page_start'] + 4; $i++)--}}
                    {{--<li @if($page_info['active_page'] == $i) class="s-active"   @endif><a href="">{{$i}}</a></li>--}}
                {{--@endfor--}}
                {{--<li class="s-omit"><a href="">......</a></li>--}}
                {{--<li @if($page_info['active_page'] == $page_info['show_pages_length'] + $page_info['page_start']) class="s-active"   @endif><a href="">{{$page_info['show_pages_length'] + $page_info['page_start']}}</a></li>--}}
            {{--@endif--}}
            <li>{{$data['recommendlist']->links()}}</li>
        </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/bookm_list/bookm_list.css")}}
@stop