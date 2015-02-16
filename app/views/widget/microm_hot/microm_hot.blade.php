<div class="m-microm_hot">
    <h4>热门电影</h4>
    @for($i = 0; $i < count($microm_hot); $i++)
        <div class="u-movie_item f-cb">
            <img src="{{$microm_hot[$i]['movie_icon_src']}}" alt="" class="f-fl"/>
            <aside class="u-movie_info f-fl">
                <h5 class="u-movie_hot_name">{{$microm_hot[$i]['movie_name']}}</h5>
                <p class="u-love_hot_count">点赞数:{{$microm_hot[$i]['love_count']}}</p>
            </aside>
        </div>
    @endfor
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_hot/microm_hot.css")}}
@stop