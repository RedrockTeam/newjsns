{{--tabs--}}
<ul class="u-tags_sort f-cb">
    <li class="s-active"><a href="">综合排序</a></li>
    <li><a href="">按时间排序</a></li>
    <li><a href="">按热度排序</a></li>
</ul>
{{--list--}}
@for($i = 0, $count = count($book_tags); $i < $count; $i++)
<div class="m-tag_item f-cb">
    <img src="" alt="" class="s-img_show"/>
    <aside class="u-tag_info">
        <h3 class="u-title">{{$book_tags[$i]['title']}}</h3>
        <h6 class="u-author">{{$book_tags[$i]['author']}} {{$book_tags[$i]['price']}}(元)</h6>
        <div class="u-movie_stars">
            <ul>
                @if( ($book_tags[$i]['star'] / 0.5) % 2 == 0 )
                    @for($j = 0; $j < ($book_tags[$i]['star'] / 0.5) / 2; $j++)
                        <li class="s-star_all"></li>
                    @endfor
                @else
                    @for($j = 0; $j < ( ( ($book_tags[$i]['star']) - 0.5 )  / 0.5) / 2; $j++)
                        <li class="s-star_all"></li>
                    @endfor
                    <li class="s-star_half"></li>
                @endif
            </ul>
            <span class="u-start_num">{{$book_tags[$i]['star']}}</span>
            <span class="u-comment_total">({{$book_tags[$i]['comment_total']}})人评价过</span>
        </div>
        <p class="u-tag_intro">
            {{$book_tags[$i]['intro']}}
        </p>
    </aside>
</div>
@endfor
@section("css")
    @parent
    {{HTML::style("css/widget/book_tags_lists/book_tags_lists.css", [], true)}}
@stop