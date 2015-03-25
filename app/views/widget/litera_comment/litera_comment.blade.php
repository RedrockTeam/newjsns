{{--文学详细页评论部分--}}
<div class="m-litera_comment">
    @foreach($data['comment']['cz'] as $key => $czcomment)
        <div class="u-comment_item f-cb">
            <img class="u-show_user_icon" src="{{$czcomment['head_pic']}}" alt=""/>
            <aside class="u-comment_detail js-father" data-value="{{$czcomment['id']}}">
                <span class="u-user_name">{{$czcomment['username']}}</span>
                <p class="u-user_content"> {{$czcomment['content']}}</p>
               @if(isset($data['comment']['lzl'][$key]))
                @foreach($data['comment']['lzl'][$key] as $v)
                <div class="s-reply_items f-cb">
                    <div class="s-content_wrap js-user_info">
                        <span class="u-user_name js-user_from" data-value="{{$v['from_uid']}}">{{$v['from_name']}}</span>
                        <span class="u-reply_tag">回复</span>
                        <span class="u-user_name" class="js-user_to" data-value="{{$v['to_uid']}}">{{$v['to_name']}} :</span>
                        {{--<span class="u-reply_content">{{$v['content']}}</span>--}}
                         <span class="u-reply_content">信息，并说明如何使用所提供的各种数据输入技术。</span>
                    </div>
                    <button class="u-reply_btn js-reply_btn">我要回复</button>
                </div>
                @endforeach
                @else
                @endif
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
        <li>{{$data['comment']['page']->appends(array('type_id' => $data['passage']['type_id'], 'passage_id' => $data['passage']['id']))->links()}}</li>
    </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_comment/litera_comment.css")}}
@stop