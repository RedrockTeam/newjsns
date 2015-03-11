{{--读书影逝--}}
<div class="m-bkmv_lists">
    <ul class=f-cb">
    @foreach($data['recommendlist'] as $recommend)
            <a href="{{route('bkmv_sub')}}?type_id={{$recommend['type_id']}}&passage_id={{$recommend['id']}}">
                <li class="u-bkmv_item">
                    <img src="{{$recommend['cover_url']}}" alt=""/>
                    <div class="u-bkmv_info f-cb">
                        <h5 class="u-bkmv_name">{{$recommend['title']}}</h5>
                        <div class="u-user_action f-cb">
                            <div class="u-bkmv_comment">{{$recommend['comment_num']}}</div>
                            <div class="u-bkmv_love">{{$recommend['love_num']}}</div>
                        </div>
                    </div>
                </li>
            </a>
    @endforeach
    </ul>
    {{--切换页面--}}
    {{$data['recommendlist']->links()}}
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/bookm_list/bookm_list.css")}}
@stop