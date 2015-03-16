{{--微视列表--}}
<div class="m-movie_lists">
    @foreach($data['micromovielist'] as $micromovie)
        <div class="u-movie_item f-cb">
            <img src="" alt="" class="u-m_show_img"/>
            <aside class="u-m_info">
                <a href="{{route('microm_sub')}}?type_id={{$micromovie['type_id']}}&passage_id={{$micromovie['id']}}">
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
                </a>
                <p class="u-m_intro">
                    {{str_limit($micromovie['introduce'], '250', '......')}}
                </p>
                <div class="u-m_user_action">
                    <div class="u-share"><a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a></div>
                    <div class="show_movie-comments">({{$micromovie['comment_num']}})</div>
                    <div class="show_movie_love js-praise"><i class="fa fa-heart js-show_love"></i><span class="js-num">({{$micromovie['love_num']}})</span></div>
                </div>
            </aside>
        </div>
    @endforeach
    {{--切换页面--}}
    {{$data['micromovielist']->links()}}
</div>
<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?" target="_blank">QQ空间</a>
<a href="http://v.t.qq.com/share/share.php?url=http://www.shao-ming.com&title='分享内容'" target="_blank">腾讯微博</a>
@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_list/microm_list.css")}}
    {{HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css")}}
@stop