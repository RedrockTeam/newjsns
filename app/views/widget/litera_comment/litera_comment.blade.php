{{--文学详细页评论部分--}}
<div class="m-litera_comment js-passage_info js-comment_father" data-type_id="{{Input::get('type_id')}}" data-passage_id="{{Input::get('passage_id')}}">
    @foreach($data['comment']['cz'] as $key => $czcomment)
        <div class="u-comment_item f-cb js-comment_item">
            <img class="u-show_user_icon" src="{{$czcomment['head_pic']}}" alt=""/>
            <aside class="u-comment_detail js-reply_father" data-value="{{$czcomment['id']}}">
                <span class="u-user_name js-fater_user">{{$czcomment['username']}}</span>
                <p class="u-user_content"> {{$czcomment['content']}}</p>
               @if(isset($data['comment']['lzl'][$key]))
                @foreach($data['comment']['lzl'][$key] as $v)
                <div class="s-reply_items f-cb js-reply_item">
                    <div class="s-content_wrap js-user_info">
                        <span class="u-user_name js-user_from" data-value="{{$v['from_uid']}}">{{$v['from_name']}}</span>
                        <span class="u-reply_tag">回复</span>
                        <span class="u-user_name js-user_to" data-value="{{$v['to_uid']}}">{{$v['to_name']}} :</span>
                        <span class="u-reply_content js-user_content">{{$v['content']}}</span>
                         {{--<span class="u-reply_content">信息，并说明如何使用所提供的各种数据输入技术。</span>--}}
                    </div>
                    <button class="u-reply_btn js-reply_btn">我要回复</button>
                </div>
                @endforeach
                @else
                @endif
                 <div class="u-user_action js-user_action">
                        <span value="{{$czcomment['id']}}" class="js-comment_btn">我要评论</span>
                       <span>{{$czcomment['time']}}</span>
                 </div>
            </aside>
        </div>
    @endforeach

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
<script type="ttext/template" id="temp_comment">

</script>
@section("css")
    @parent
    {{HTML::style("public/css/widget/litera_comment/litera_comment.css")}}
@stop