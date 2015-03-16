<article class="m-microm_intro">
    <div class="u-intro_h f-cb">
        <div class="u-intro_l f-fl">
            <div class="u-intro_n_s f-cb">
                <h5 class="f-fl">{{$data['movie']['title']}}</h5>
                <ul class="u-movie_stars f-cb f-fl">
                 @if( ($data['movie']['star'] / 0.5) % 2 == 0 )
                     @for($j = 0; $j < ($data['movie']['star'] / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                    @else
                        @for($j = 0; $j < ( ( ($data['movie']['star']) - 0.5 )  / 0.5) / 2; $j++)
                            <li class="s-star_all"></li>
                        @endfor
                        <li class="s-star_half"></li>
                    @endif
                </ul>
            </div>
            <div class="u-m_info_b">
                <span>影片作者:{{$data['movie']['author']}}</span>
                <span>{{$data['movie']['created_at']}}</span>
            </div>
        </div>
        <div class="u-intro_r f-fr">
            <a href="" class="u-action_favor js-praise">赞</a>
            <a href="" class="u-action_tread">踩</a>
        </div>
    </div>
    <div class="u-intro_detail">
        <h4>剧情简介</h4>
        <p>{{$data['movie']['introduce']}}</p>
    </div>
</article>
@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_intro/microm_intro.css")}}
@stop