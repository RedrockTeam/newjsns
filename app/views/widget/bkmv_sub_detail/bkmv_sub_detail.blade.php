<div class="m-bkmv_detail">
    <h5 class="u-bkmv_name">{{$data['passage']['title']}}</h5>
    <div class="u-bkmv_o_intro">
        <div class="u-bkmv_intro_h f-cb">
            <img src="{{$data['passage']['cover_url']}}" alt="" class="u-bkmv_show_icon f-fl"/>
            <aside class="u-bkmv_o_info f-fl">
                <div class="u-bkmv_o_h f-cb">
                    <ul class="u-movie_stars f-cb f-fl">
                        @if( ($data['passage']['star'] / 0.5) % 2 == 0 )
                            @for($j = 0; $j < ($data['passage']['star'] / 0.5) / 2; $j++)
                                <li class="s-star_all"></li>
                            @endfor
                        @else
                            @for($j = 0; $j < ( ( ($data['passage']['star']) - 0.5 )  / 0.5) / 2; $j++)
                                <li class="s-star_all"></li>
                            @endfor
                            <li class="s-star_half"></li>
                     @endif
                    </ul>
                    <span class="u-bkmv_stars_num f-fl">{{$data['passage']['star']}}</span>
                </div>
                <ul class="u-bkmv_info_lists f-cb">
                        <li><span class="u-sec_info_key">作者:</span><span class="u-sec_info_value">{{$data['passage']['author']}}</span></li>
                        <li><span class="u-sec_info_key">出版社:</span><span class="u-sec_info_value">{{$data['passage']['publish']}}</span></li>
                        <li><span class="u-sec_info_key">原标题:</span><span class="u-sec_info_value">{{$data['passage']['original_title']}}</span></li>
                        <li><span class="u-sec_info_key">译者:</span><span class="u-sec_info_value">{{$data['passage']['interpreter']}}</span></li>
                        <li><span class="u-sec_info_key">出版日期:</span><span class="u-sec_info_value">{{$data['passage']['time']}}</span></li>
                        <li><span class="u-sec_info_key">页数:</span><span class="u-sec_info_value">{{$data['passage']['page_num']}}</span></li>
                        <li><span class="u-sec_info_key">定价:</span><span class="u-sec_info_value">{{$data['passage']['price']}}元</span></li>
                </ul>
            </aside>
        </div>
        {{--内容简介， 可注入html代码--}}
        <div class="m-bkmv_brief_intro">
            <h5 class="s-intro_title">内容简介</h5>
            <div class="u-bkmv_intro_content">
                {{$data['passage']['works_introduce']}}
            </div>
        </div>
    </div>
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_detail/bkmv_sub_detail.css")}}
@stop