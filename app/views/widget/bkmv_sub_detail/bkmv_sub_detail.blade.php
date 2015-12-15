<div class="m-bkmv_detail js-content_info" data-value="0">  {{--0 没有value--}}
    <h5 class="u-bkmv_name js-share_title">{{$data['passage']['title']}}</h5>
    <div class="u-bkmv_o_intro">
        <div class="u-bkmv_intro_h f-cb">
            <div class="u-bkmv_show_icon f-fl" style="background-image: url('{{$data['passage']["cover_url"]}}')"> </div>
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
                        <li><span class="u-sec_info_key">作者:</span><span class="u-sec_info_value js-content_title" >{{$data['passage']['author']}}</span></li>
                        <li><span class="u-sec_info_key">出版社:</span><span class="u-sec_info_value">{{$data['passage']['publish']}}</span></li>
                        <li><span class="u-sec_info_key">原标题:</span><span class="u-sec_info_value">{{$data['passage']['original_title']}}</span></li>
                        <li><span class="u-sec_info_key">译者:</span><span class="u-sec_info_value">{{$data['passage']['interpreter']}}</span></li>
                        <li><span class="u-sec_info_key">出版日期:</span><span class="u-sec_info_value">{{$data['passage']['time']}}</span></li>
                        <li><span class="u-sec_info_key">页数:</span><span class="u-sec_info_value">{{$data['passage']['page_num']}}</span></li>
                        <li><span class="u-sec_info_key">定价:</span><span class="u-sec_info_value">{{$data['passage']['price']}}元</span></li>
                </ul>
            </aside>
        </div>
        @include("widget.bdshare.bdshare")
        {{--内容简介， 可注入html代码--}}
        <div class="m-bkmv_brief_intro">
            <h5 class="s-intro_title">内容简介</h5>
            <p class="u-bkmv_intro_content js-share_content">{{$data['passage']['works_introduce']}}</p>
        </div>
    </div>
</div>

@section("css")
    @parent
    {{HTML::style("css/widget/bkmv_sub_detail/bkmv_sub_detail.css", [], true)}}
@stop