{{--文章详细页--}}
<div class="m-litera_conent f-cb js-content_info" data-value="{{$data['passage']['user']['id']}}">
    {{--文章头部--}}
    <div class="u-litera_content_h">
        <h5 class="js-share_title">{{$data['passage']['title']}}</h5>
        <span>文/</span>
        <span class="js-content_title">{{$data['passage']['user']['username']}}</span>
    </div>
    {{--文章内容--}}
    <article class="u-litera_content js-share_content js-stop_copy">
        {{$data['passage']['content']}}
    </article>
    {{--文章时间--}}
    <div class="u-article_date">{{$data['passage']['created_at']}}</div>
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/litera_content/litera_content.css", [], true)}}
@stop