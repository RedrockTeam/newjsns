<div class="m-personal_info">
    <a href="" class="u-change_info">修改信息</a>
    <div class="m-info_detail">
        <img src="{{$user_info['main_info']['user_show_icon']}}" alt="" class="u-user_show_icon"/>
        <h5>{{$user_info['main_info']['user_name']}}</h5>
        <h6>{{$user_info['main_info']['user_motto']}}</h6>
        <ul class="u-user_extra_info">
            @foreach($user_info['sec_info'] as $key => $value)
                <li><span>{{$key}}:</span><span>{{$value}}</span></li>
            @endforeach
        </ul>
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_info/personal_info.css")}}
@stop