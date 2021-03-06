{{--微视列表--}}
<div class="m-movie_lists">
    @foreach($data['micromovielist'] as $micromovie)
        <div class="u-movie_item f-cb">
            <div style="background-image: url('{{substr($micromovie['cover_url'], 7)}}')" alt="" class="u-m_show_img"></div>
            <aside class="u-m_info">
                <a href="{{route('microm_sub')}}?type_id={{$micromovie['type_id']}}&passage_id={{$micromovie['id']}}" class="s-link_wrap">
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
                        {{str_limit($micromovie['introduce'], '250', '......')}}
                    </p>
                </a>
                <div class="u-m_user_action">
                    <div class="show_movie-comments"><a href="{{route('microm_sub')}}?type_id={{$micromovie['type_id']}}&passage_id={{$micromovie['id']}}">({{$micromovie['comment_num']}})</a></div>
                    <div class="show_movie_love js-praise" data-type_id="{{$micromovie['type_id']}}" data-passage_id="{{$micromovie['id']}}"><i class="fa fa-heart js-show_love"></i><span class="js-num">({{$micromovie['love_num']}})</span></div>
                </div>
            </aside>
        </div>
    @endforeach
    {{--切换页面--}}
    {{$data['micromovielist']->links()}}
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/microm_list/microm_list.css", [], true)}}
    {{HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css", [], true)}}
@stop