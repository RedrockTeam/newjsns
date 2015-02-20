{{--微视列表--}}
<div class="m-movie_lists">
    @foreach($data['micromovielist'] as $micromovie)
        <div class="u-movie_item f-cb">
            <img src="" alt="" class="u-m_show_img"/>
            <aside class="u-m_info">
                <div class="u-m_info_h f-cb">
                    <h5>{{$micromovie['title']}}</h5>
                    <ul class="u-movie_stars">

                    @if( ($micromovie['star'] / 0.5) % 2 == 0 )
                        @for($j = 0; $j < ($micromovie['star'] / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                    @else
                        @for($j = 0; $j < ( ( ($micromovie['star']) - 0.5 )  / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                        <li class="s-star_half"></li>
                    @endif
                    </ul>
                </div>
                <div class="u-m_info_b">
                    <span>影片作者:{{$micromovie['author']}}</span>
                    <span>{{$micromovie['created_at']}}</span>
                </div>
                <p class="u-m_intro">
                    {{$micromovie['introduce']}}
                </p>
                <div class="u-m_user_action">
                    <div class="u-share"><a href=""></a></div>
                    <div class="show_movie-comments">({{$micromovie['comment_num']}})</div>
                    <div class="show_movie_love">({{$micromovie['love_num']}})</div>
                </div>
            </aside>
        </div>
    @endforeach
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
            <li>{{$data['micromovielist']->links()}}</li>
        </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_list/microm_list.css")}}
@stop