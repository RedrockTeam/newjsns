<ul class="m-recom_lists">
    @foreach($data['recommend_list'] as $value)
        <li><span>[{{$value["type"]}}]</span><a href="litera_sub?type_id={{$value['type_id']}}&passage_id={{$value['passage_id']}}">{{$value["title"]}}</a></li>
    @endforeach
</ul>
@section("css")
    @parent
    {{HTML::style("css/widget/litera_recom_list/litera_recom_list.css")}}
@stop