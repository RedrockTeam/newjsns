<div class="m-microm_hot">
    <h4>热门电影</h4>
    @foreach($data['hot'] as $hot)
        <div class="u-movie_item f-cb">
            <div class="u-fix_image_wrap js-fix_image_parent" style="background-image: url('{{$hot["cover_url"]}}')"></div>
            <aside class="u-movie_info">
                <h5 class="u-movie_hot_name"><a href="{{route('microm_sub')}}?type_id={{$hot['type_id']}}&passage_id={{$hot['id']}}">{{$hot['title']}}</a></h5>
                <p class="u-love_hot_count">点赞数:{{$hot['love_num']}}</p>
            </aside>
        </div>
    @endforeach
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/microm_hot/microm_hot.css", [], true)}}
@stop