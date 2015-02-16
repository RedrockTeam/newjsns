<div class="m-photos_lists f-cb js-outer_photo">
    <ul class="g-ph_item">
        @for($i = 0; $i < count($ph_lists['fir_col']); $i++)
            <li class="u-ph_item f-cb">

                @for($j = 0; $j < count($ph_lists['fir_col'][$i]['img_src']); $j++)
                    <img src="{{$ph_lists['fir_col'][$i]['img_src'][$j]}}" alt=""/>
                @endfor
                <div class="u-user_action f-cb">
                    <div class="u-show_comments"><a href="{{$ph_lists['fir_col'][$i]['comment_count']}}">({{$ph_lists['fir_col'][$i]['comment_count']}})</a></div>
                    <div class="u-show_love">({{$ph_lists['fir_col'][$i]['love_count']}})</div>
                </div>
            </li>
        @endfor
    </ul>
    <ul class="g-ph_item">
       @for($i = 0; $i < count($ph_lists['sec_col']); $i++)
            <li class="u-ph_item f-cb">
                @for($j = 0; $j < count($ph_lists['sec_col'][$i]['img_src']); $j++)
                    <img src="{{$ph_lists['sec_col'][$i]['img_src'][$j]}}" alt=""/>
                @endfor
                <div class="u-user_action f-cb">
                    <div class="u-show_comments"><a href="{{$ph_lists['sec_col'][$i]['comment_count']}}">({{$ph_lists['sec_col'][$i]['comment_count']}})</a></div>
                    <div class="u-show_love">({{$ph_lists['sec_col'][$i]['love_count']}})</div>
                </div>
            </li>
       @endfor
    </ul>
    <ul class="g-ph_item">
       @for($i = 0; $i < count($ph_lists['thir_col']); $i++)
            <li class="u-ph_item f-cb">
                @for($j = 0; $j < count($ph_lists['thir_col'][$i]['img_src']); $j++)
                    <img src="{{$ph_lists['thir_col'][$i]['img_src'][$j]}}" alt=""/>
                @endfor
                <div class="u-user_action f-cb">
                    <div class="u-show_comments"><a href="{{$ph_lists['thir_col'][$i]['comment_count']}}">({{$ph_lists['thir_col'][$i]['comment_count']}})</a></div>
                    <div class="u-show_love">({{$ph_lists['thir_col'][$i]['love_count']}})</div>
                </div>
            </li>
       @endfor
    </ul>
    <ul class="g-ph_item">
       @for($i = 0; $i < count($ph_lists['four_col']); $i++)
            <li class="u-ph_item f-cb">
                @for($j = 0; $j < count($ph_lists['four_col'][$i]['img_src']); $j++)
                    <img src="{{$ph_lists['four_col'][$i]['img_src'][$j]}}" alt=""/>
                @endfor
                <div class="u-user_action f-cb">
                    <div class="u-show_comments"><a href="{{$ph_lists['four_col'][$i]['comment_count']}}">({{$ph_lists['four_col'][$i]['comment_count']}})</a></div>
                    <div class="u-show_love">({{$ph_lists['four_col'][$i]['love_count']}})</div>
                </div>
            </li>
       @endfor
    </ul>
</div>
<i class="s-load js-load_gif"></i>

{{--template 模板--}}
<script type="text/template" id="js-photo_temp">
    <%for(var i = 0; i < data.length; i++ ){%>
            <li class="u-ph_item f-cb">
                <% for(var j = 0; j < data[i]['img_src'].length; j++ ){%>
                    <img src="<%= data[i]['img_src'][j]%>" alt=""/>
                <%}%>
                <div class="u-user_action f-cb">
                    <div class="u-show_comments"><a href="">(<%= data[i]['comment_count']%>)</a></div>
                    <div class="u-show_love">(<%= data[i]['love_count']%>)</div>
                </div>
            </li>
    <%}%>
</script>
@section("css")
    @parent
    {{HTML::style("public/css/widget/photos_list/photos_list.css")}}
@stop