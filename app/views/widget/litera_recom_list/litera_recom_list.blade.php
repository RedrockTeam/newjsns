<ul class="m-recom_lists">
    @foreach($data['recommend_list'] as $value)
        <li><span>[{{$value["type"]}}]</span><a href="">{{$value["title"]}}</a></li>
    @endforeach
</ul>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_recom_list/litera_recom_list.css")}}
@stop