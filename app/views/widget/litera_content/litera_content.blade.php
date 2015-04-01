{{--文章详细页--}}
<article class="m-litera_conent f-cb" data-value="{{$data['passage']['user']['id']}}">
    {{--文章头部--}}
    <div class="u-litera_content_h">
        <h5 class="js-share_title">{{$data['passage']['title']}}</h5>
        <span>文/{{$data['passage']['user']['username']}}</span>
    </div>
    {{--文章内容--}}
    <p class="u-litera_content js-share_content">
        {{$data['passage']['content']}}
    </p>
    {{--文章时间--}}
    <div class="u-article_date">{{$data['passage']['created_at']}}</div>
</article>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_content/litera_content.css")}}
@stop