<div class="m-bkmv_recom">
    <h4>其他推荐</h4>
    @foreach($data['recommend'] as $recommend)
        <div class="u-bk_item f-cb">
            <img src="{{$recommend['cover_url']}}" alt="" class="f-fl"/>
            <aside class="u-movie_info f-fl">
                <h5 class="u-movie_hot_name">{{$recommend['title']}}</h5>
                <ul>
                    <li><span>作者:</span><span>{{$recommend['author']}}</span></li>

                </ul>
            </aside>
        </div>
    @endforeach
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_recom/bkmv_sub_recom.css")}}
@stop
