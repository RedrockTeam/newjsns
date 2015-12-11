{{--读书影逝--}}
<div class="m-bkmv_lists">
    <ul class="f-cb">
    @foreach($data['recommendlist'] as $recommend)
            <li class="u-bkmv_item f-pr" style="background-image: url('{{substr($recommend["cover_url"], 7)}}')">
                <div class="u-bkmv_info f-cb">
                    <h5 class="u-bkmv_name">{{$recommend['title']}}</h5>
                    <div class="u-user_action f-cb">
                        <div class="u-bkmv_comment">{{$recommend['comment_num']}}</div>
                        <div class="u-bkmv_love js-praise" data-type_id="{{$recommend['type_id']}}" data-passage_id="{{$recommend['id']}}"><i class="fa fa-heart js-show_love"></i><span class="js-num">({{$recommend['love_num']}})</span></div>
                    </div>
                </div>
                <a class="f-link-wrap" href="{{route('bkmv_sub')}}?type_id={{$recommend['type_id']}}&passage_id={{$recommend['id']}}"></a>
            </li>
    @endforeach
    </ul>
    {{--切换页面--}}
    {{$data['recommendlist']->links()}}
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/bookm_list/bookm_list.css")}}
    {{HTML::style("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css")}}
@stop