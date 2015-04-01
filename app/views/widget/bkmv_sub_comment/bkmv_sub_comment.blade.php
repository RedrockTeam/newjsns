<div class="m-bkmv_comments" data-type_id="{{Input::get('type_id')}}" data-passage_id="{{Input::get('passage_id')}}">
    @foreach($data['comment']['cz'] as $key => $czcomment)
        <div class="u-comment_item f-cb">
            <img class="u-show_user_icon" src="{{$czcomment['head_pic']}}" alt=""/>
            <aside class="u-comment_detail" data-value="{{$czcomment['id']}}">
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
        <li>{{$data['comment']['page']->appends(array('type_id' => $data['passage']['type_id'], 'passage_id' => $data['passage']['id']))->links()}}</li>
    </ul>
</div>

{{--切换页面--}}
    {{$data['comment']['page']->appends(array('type_id' => $data['passage']['type_id'], 'passage_id' => $data['passage']['id']))->links()}}
    @include("widget.comment.comment")
</div>
<script type="text/template" id="temp_reply">
    <div class="s-reply_items f-cb js-reply_item">
            <div class="s-content_wrap js-user_info">
                <span class="u-user_name js-user_from" data-value="<%= data.from%>"><%= data.from_name%></span>
                <span class="u-reply_tag">回复</span>
             <span class="u-user_name js-user_to" data-value="<%= data.to%>"><%= data.to_name%> :</span>
                <span class="u-reply_content js-user_content"><%= data.content%></span>
                {{--<span class="u-reply_content">信息，并说明如何使用所提供的各种数据输入技术。</span>--}}
            </div>
            <button class="u-reply_btn js-reply_btn">我要回复</button>
    </div>
</script>

@section("css")
    @parent
    {{HTML::style("public/css/widget/bkmv_sub_comment/bkmv_sub_comment.css")}}
@stop