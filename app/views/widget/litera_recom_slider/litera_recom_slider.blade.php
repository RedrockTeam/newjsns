<div class="slideBox js-slider">
    <ul class="items">
        @for($i = 0; $i < 4; ++$i)
            @if(isset($data['recommend_list'][$i]))
        <li><a href="litera_sub?passage_id={{$data['recommend_list'][$i]['id']}}&type_id={{$data['recommend_list'][$i]['type_id']}}" title="{{$data['recommend_list'][$i]['title']}}"></a><img src="{{substr($data['recommend_list'][$i]['cover'], 7)}}" alt="" class="s-img"/></li>
       @else
            @endif
        @endfor
    </ul>
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/litera_recom_slider/litera_recom_slider.css", [], true)}}
@stop