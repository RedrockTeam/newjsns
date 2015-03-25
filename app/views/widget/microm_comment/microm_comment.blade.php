{{--微视评论详细页--}}
<div class="m-microm_comments">
    @foreach($data['comment']['cz'] as $key => $czcomment)
        <div class="u-comment_item f-cb">
            <img class="u-show_user_icon" src="{{$czcomment['head_pic']}}" alt=""/>
            <aside class="u-comment_detail">
                <span class="u-user_name" value="{{$czcomment['id']}}">{{$czcomment['username']}}</span>
                <p class="u-user_content"> {{$czcomment['content']}}</p>
                @if(isset($data['comment']['lzl'][$key]))
                    @foreach($data['comment']['lzl'][$key] as $v)
                        <div class="s-reply_items">
                            <span class="u-user_name" value="{{$v['from_uid']}}">{{$v['from_name']}}</span>
                            <span class="u-reply_tag">回复</span>
                            <span class="u-user_name" value="{{$v['to_uid']}}">{{$v['to_name']}}</span>
                            <span class="u-reply_content">{{$v['content']}}</span>
                        </div>
                    @endforeach
                @else
                @endif
                <div class="u-user_action">
                        <span value="{{$czcomment['id']}}>赞</span>
                        <span value="{{$czcomment['id']}}>回复</span>
                    <span>{{$czcomment['time']}}</span>
                </div>
            </aside>
        </div>
    @endforeach

    {{--切换页面--}}
    <ul class="u-page_tabs f-cb">
        {{--@if($page_info['show_pages_length'] > 4)--}}
            {{--@for($i = $page_info['page_start']; $i < $page_info['page_start'] + 4; $i++)--}}
                {{--<li @if($page_info['active_page'] == $i) class="s-active"   @endif><a href="">{{$i}}</a></li>--}}
            {{--@endfor--}}
            {{--<li class="s-omit"><a href="">......</a></li>--}}
            {{--<li @if($page_info['active_page'] == $page_info['show_pages_length'] + $page_info['page_start']) class="s-active"   @endif><a href="">{{$page_info['show_pages_length'] + $page_info['page_start']}}</a></li>--}}
        {{--@endif--}}
        {{--<li><a href="">下一页</a></li>--}}
        <li>{{$data['comment']['page']->appends(array('type_id' => $data['movie']['type_id'], 'passage_id' => $data['movie']['id']))->links()}}</li>
    </ul>

    {{--发表评论部分--}}
    <form action="" class="m-litera_re_comment f-cb">
       <input type="text" value="" class="u-input" placeholder="这里发表评论"/>
       <input type="submit" class="u-submit"/>
    </form>
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_comment/microm_comment.css")}}
@stop