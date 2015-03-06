{{--文章列表--}}
<div class="m-artitcle_lists">
    {{--文学内容部分--}}
    @foreach($data['passagelist'] as $value)
        <div class="u-article_item f-cb">
            <img class="u-img_show" src="{{$value['cover']}}" alt=""/>
            <article class="u-content">
                <div class="u-content_h">
                    <h5>{{$value['title']}}</h5>
                    <span>{{$value['user']['username']}}</span>
                </div>
                <p class="u-content-omit">
                    <a href="litera_sub?passage_id={{$value['id']}}&type_id={{$value['type_id']}}">{{str_limit($value['content'], '250', '......')}}</a>
                    <div class="u-litera_user_action f-cb">
                        <div class="show_litera-comments">
                            <a href="#">
                                ({{$value['comment_num']}})
                            </a>
                        </div>
                        <div class="show_litera_love">({{$value['love_num']}})</div>
                    </div>
                </p>
            </article>
        </div>
    @endforeach

    {{--切换页面--}}
    {{$data['passagelist']->links()}}

</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_list/litera_list.css")}}
@stop