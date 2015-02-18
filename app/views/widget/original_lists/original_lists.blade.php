<dl class="m-ori_print_lists g-lists f-cb">
    <dt class="u-ori_header f-cb">
        <span class="s-title">绘画</span>
        <span class="u-link_more"><a href="">更多</a></span>
    </dt>

    @for($i = 0; $i < count($print_lists); $i++)
        <dd class="u-list_item">
            <a href="{{$print_lists[$i]['link_src']}}">
                <img src="{{$print_lists[$i]['icon_src']}}" alt="" class=""/>
                <span class="u-list_name">{{$print_lists[$i]['name']}}</span>
            </a>
        </dd>
    @endfor
</dl>
<dl class="m-ori_twist_lists g-lists f-cb">
    <dt class="u-ori_header f-cb">
        <span class="s-title">曲艺</span>
        <span class="u-link_more"><a href="">更多</a></span>
    </dt>

    @for($i = 0; $i < count($opera_lists); $i++)
        <dd class="u-list_item">
            <a href="{{$opera_lists[$i]['link_src']}}">
                <img src="{{$opera_lists[$i]['icon_src']}}" alt="" class=""/>
                <span class="u-list_name">{{$opera_lists[$i]['name']}}</span>
            </a>
        </dd>
    @endfor
</dl>
<dl class="m-ori_song_lists g-lists f-cb">
    <dt class="u-ori_header f-cb">
        <span class="s-title">音乐</span>
        <span class="u-link_more"><a href="">更多</a></span>
    </dt>

    @for($i = 0; $i < count($song_lists); $i++)
        <dd class="u-list_item">
            <a href="{{$song_lists[$i]['link_src']}}">
                <img src="{{$song_lists[$i]['icon_src']}}" alt="" class=""/>
                <span class="u-list_name">{{$song_lists[$i]['name']}}</span>
            </a>
        </dd>
    @endfor
</dl>
<dl class="m-ori_model_lists g-lists f-cb">
    <dt class="u-ori_header f-cb">
        <span class="s-title">模型</span>
        <span class="u-link_more"><a href="">更多</a></span>
    </dt>

    @for($i = 0; $i < count($model_lists); $i++)
        <dd class="u-list_item">
            <a href="{{$model_lists[$i]['link_src']}}">
                <img src="{{$model_lists[$i]['icon_src']}}" alt="" class=""/>
                <span class="u-list_name">{{$model_lists[$i]['name']}}</span>
            </a>
        </dd>
    @endfor
</dl>
@section("css")
    @parent
    {{HTML::style("public/css/widget/original_lists/original_lists.css")}}
@stop