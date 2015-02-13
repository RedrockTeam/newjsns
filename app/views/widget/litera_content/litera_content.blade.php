{{--文章详细页--}}
<article class="m-litera_conent f-cb">
    {{--文章头部--}}
    <div class="u-litera_content_h">
        <h5>{{$article_detail['article_title']}}</h5>
        <span>{{$article_detail['article_author']}}</span>
    </div>
    {{--文章内容--}}
    <div class="u-litera_content">
        {{$article_detail['article_content']}}
    </div>
    {{--文章时间--}}
    <div class="u-article_date">{{$article_detail['article_date']}}</div>
</article>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_content/litera_content.css")}}
@stop