<div class="m-bkmv_comments">
    @for($i = 0; $i < count($bkmv_comments); $i++)
        <div class="u-comment_item f-cb">
            <img class="u-show_user_icon" src="{{$bkmv_comments[$i]['user_icon']}}" alt=""/>
            <aside class="u-comment_detail f-cb">
                <span class="u-user_name">{{$bkmv_comments[$i]['user_name']}}</span>
                <p class="u-user_content"> {{$bkmv_comments[$i]['user_comment']}}</p>
                @for($j = 0; $j < count($bkmv_comments[$i]['user_replys']); $j++)
                <div class="s-reply_items">
                    <span class="u-user_name">{{$bkmv_comments[$i]['user_replys'][$j]['user_name']}}</span>
                    <span class="u-reply_tag">回复</span>
                    <span class="u-user_name">{{$bkmv_comments[$i]['user_replys'][$j]['reply_to_name']}}</span>
                    <span class="u-reply_content">{{$bkmv_comments[$i]['user_replys'][$j]['reply_content']}}</span>
                </div>
                <div class="u-user_action">
                    <span>赞</span>
                    <span>回复</span>
                    <span>{{$bkmv_comments[$i]['comment_date']}}</span>
                </div>
                @endfor
            </aside>
        </div>
    @endfor

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

    {{--发表评论部分--}}
    <form action="" class="m-litera_re_comment f-cb">
       <input type="text" value="" class="u-input" placeholder="这里发表评论"/>
       <input type="submit" class="u-submit"/>
    </form>
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_comment/bkmv_sub_comment.css")}}
@stop