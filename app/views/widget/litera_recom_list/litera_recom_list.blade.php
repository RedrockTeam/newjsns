<ul class="m-recom_lists">
    @for($i=0; $i < count($litera_recom_items); $i++)
        <li><span>[{{$litera_recom_items[$i]["title"]}}]</span><a href="">{{$litera_recom_items[$i]["content"]}}</a></li>
    @endfor
</ul>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_recom_list/litera_recom_list.css")}}
@stop