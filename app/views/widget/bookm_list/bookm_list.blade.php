{{--读书影逝--}}
<div class="m-bkmv_lists">
    <ul class=f-cb">
    @for($i = 0; $i < count($bkmv_lists); $i++)
        <li class="u-bkmv_item">
            <img src="{{$bkmv_lists[$i]['bkmv_icon_src']}}" alt=""/>
            <div class="u-bkmv_info f-cb">
                <h5 class="u-bkmv_name">{{$bkmv_lists[$i]['bkmv_name']}}</h5>
                <div class="u-user_action f-cb">
                    <div class="u-bkmv_comment">{{$bkmv_lists[$i]['love_count']}}</div>
                    <div class="u-bkmv_love">{{$bkmv_lists[$i]['comment_count']}}</div>
                </div>
            </div>
        </li>
    @endfor
    </ul>
    {{--切换页面--}}
        <ul class="u-page_tabs f-cb">
            @if($page_info['show_pages_length'] > 4)
                @for($i = $page_info['page_start']; $i < $page_info['page_start'] + 4; $i++)
                    <li @if($page_info['active_page'] == $i) class="s-active"   @endif><a href="">{{$i}}</a></li>
                @endfor
                <li class="s-omit"><a href="">......</a></li>
                <li @if($page_info['active_page'] == $page_info['show_pages_length'] + $page_info['page_start']) class="s-active"   @endif><a href="">{{$page_info['show_pages_length'] + $page_info['page_start']}}</a></li>
            @endif
            <li><a href="">下一页</a></li>
        </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/bookm_list/bookm_list.css")}}
@stop