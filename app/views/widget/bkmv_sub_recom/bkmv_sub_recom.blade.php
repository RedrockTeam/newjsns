<div class="m-bkmv_recom">
    <h4>热门电影</h4>
    @for($i = 0; $i < count($bkmv_recoms); $i++)
        <div class="u-bk_item f-cb">
            <img src="{{$bkmv_recoms[$i]['main_info']['bkmv_icon_src']}}" alt="" class="f-fl"/>
            <aside class="u-movie_info f-fl">
                <h5 class="u-movie_hot_name">{{$bkmv_recoms[$i]['main_info']['bkmv_name']}}</h5>
                <ul>
                    @foreach($bkmv_recoms[$i]['sec_info'] as $key => $value)
                        <li><span>{{$key}}:</span><span>{{$value}}</span></li>
                    @endforeach
                </ul>
            </aside>
        </div>
    @endfor
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_recom/bkmv_sub_recom.css")}}
@stop
