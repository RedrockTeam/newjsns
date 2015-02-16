{{--文章列表--}}
<div class="m-artitcle_lists">
    {{--文学内容部分--}}
    @for($i=0; $i < count($litera_comments_items); $i++)
        <div class="u-article_item f-cb">
            <img class="u-img_show" src="{{$litera_comments_items[$i]['comments_img_src']}}" alt=""/>
            <article class="u-content">
                <div class="u-content_h">
                    <h5>{{$litera_comments_items[$i]['title']}}</h5>
                    <span>{{$litera_comments_items[$i]['author']}}</span>
                </div>
                <p class="u-content-omit">
                    <a href="">{{$litera_comments_items[$i]['content']}}</a>
                    <div class="u-litera_user_action f-cb">
                        <div class="show_litera-comments"><a href="{{$litera_comments_items[$i]['comments_expand_link']}}">({{$litera_comments_items[$i]['comments_count']}})</a></div>
                        <div class="show_litera_love">({{$litera_comments_items[$i]['love_count']}})</div>
                    </div>
                </p>
            </article>
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

</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_list/litera_list.css")}}
@stop