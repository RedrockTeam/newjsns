<div class="m-bkmv_detail">
    <h5 class="u-bkmv_name">{{$main_info['bkmv_name']}}</h5>
    <div class="u-bkmv_o_intro">
        <div class="u-bkmv_intro_h f-cb">
            <img src="" alt="" class="u-bkmv_show_icon f-fl"/>
            <aside class="u-bkmv_o_info f-fl">
                <div class="u-bkmv_o_h f-cb">
                    <ul class="u-movie_stars f-cb f-fl">
                        @if( ($main_info['bkmv_stars'] / 0.5) % 2 == 0 )
                            @for($j = 0; $j < ($main_info['bkmv_stars'] / 0.5) / 2; $j++)
                                <li class="s-star_all"></li>
                            @endfor
                        @else
                            @for($j = 0; $j < ( ( ($main_info['bkmv_stars']) - 0.5 )  / 0.5) / 2; $j++)
                                <li class="s-star_all"></li>
                            @endfor
                            <li class="s-star_half"></li>
                     @endif
                    </ul>
                    <span class="u-bkmv_stars_num f-fl">{{$main_info['bkmv_stars']}}</span>
                </div>
                <ul class="u-bkmv_info_lists f-cb">
                    @foreach($sec_info as $key => $value)
                        <li><span class="u-sec_info_key">{{$key}}:</span><span class="u-sec_info_value">{{$value}}</span></li>
                    @endforeach
                </ul>
            </aside>
        </div>
        {{--内容简介， 可注入html代码--}}
        <div class="m-bkmv_brief_intro">
            <h5 class="s-intro_title">内容简介</h5>
            <div class="u-bkmv_intro_content">
                {{$bkmv_grief_intro}}
            </div>
        </div>
    </div>
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_detail/bkmv_sub_detail.css")}}
@stop