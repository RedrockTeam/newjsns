{{--文章列表--}}
<div class="m-artitcle_lists">
    {{--文学内容部分--}}
    @foreach($data['passagelist'] as $value)
        <div class="u-article_item f-cb">
            <div class="u-img_show" style="background-image: url('{{$value["cover"]}}')"> </div>
            <article class="u-content">
                <div class="u-content_h">
                    <h5>{{$value['title']}}</h5>
                    <span>{{$value['user']['username']}}</span>
                </div>
                <div class="u-content-omit">
                    <a class="js-stop_copy js-content_filter" href="litera_sub?passage_id={{$value['id']}}&type_id={{$value['type_id']}}" data-content="">
                       {{str_limit(strip_tags($value['content']), 250, '...')}}
                    </a>
                    <div class="u-litera_user_action f-cb">
                        <div class="show_litera_love js-praise" data-type_id="{{$value['type_id']}}" data-passage_id="{{$value['id']}}"><i class="fa fa-heart js-show_love"></i><span class="js-num">({{$value['love_num']}})</span></div>
                        <div class="show_litera-comments">
                                                    <a href="#">
                                                        {{--({{$value['comment_num']}})--}}
                                                    </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    @endforeach
    {{--切换页面--}}
    {{$data['passagelist']->links()}}
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_list/litera_list.css")}}
    {{HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css")}}
@stop