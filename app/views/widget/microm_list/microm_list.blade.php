{{--微视列表--}}
<div class="m-movie_lists">
    @for($i = 0; $i < count($movie_info); $i++)
        <div class="u-movie_item f-cb">
            <img src="" alt="" class="u-m_show_img"/>
            <aside class="u-m_info">
                <div class="u-m_info_h f-cb">
                    <h5>{{$movie_info[$i]['movie_name']}}</h5>
                    <ul class="u-movie_stars">

                    @if( ($movie_info[$i]['movie_stars'] / 0.5) % 2 == 0 )
                        @for($j = 0; $j < ($movie_info[$i]['movie_stars'] / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                    @else
                        @for($j = 0; $j < ( ( ($movie_info[$i]['movie_stars']) - 0.5 )  / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                        <li class="s-star_half"></li>
                    @endif
                    </ul>
                </div>
                <div class="u-m_info_b">
                    <span>影片作者:{{$movie_info[$i]['movie_author']}}</span>
                    <span>{{$movie_info[$i]['movie_date']}}</span>
                </div>
                <p class="u-m_intro">
                    {{$movie_info[$i]['movie_intro']}}
                </p>
                <div class="u-m_user_action">
                    <div class="u-share"><a href=""></a></div>
                    <div class="show_movie-comments"><a href="{{$movie_info[$i]['comments_expand_link']}}">({{$movie_info[$i]['comments_count']}})</a></div>
                    <div class="show_movie_love">({{$movie_info[$i]['love_count']}})</div>
                </div>
            </aside>
        </div>
    @endfor
    {{--切换页面--}}
        <ul class="u-page_tabs f-cb">
            {{--@if($page_info['show_pages_length'] > 4)--}}
                {{--@for($i = $page_info['page_start']; $i < $page_info['page_start'] + 4; $i++)--}}
                    {{--<li @if($page_info['active_page'] == $i) class="s-active"   @endif><a href="">{{$i}}</a></li>--}}
                {{--@endfor--}}
                {{--<li class="s-omit"><a href="">......</a></li>--}}
                {{--<li @if($page_info['active_page'] == $page_info['show_pages_length'] + $page_info['page_start']) class="s-active"   @endif><a href="">{{$page_info['show_pages_length'] + $page_info['page_start']}}</a></li>--}}
            {{--@endif--}}
            {{--<li><a href="">下一页</a></li>--}}
            <li></li>
        </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_list/microm_list.css")}}
@stop