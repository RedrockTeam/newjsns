<div class="m-personal_info">
    <a href="" class="u-change_info">修改信息</a>
    <div class="m-info_detail">
        <img src="{{$data['user_info']['head']}}" alt="" class="u-user_show_icon"/>
        <h5>{{$data['user_info']['username']}}</h5>
        <h6>{{$data['user_info']['introduce']}}</h6>
        <ul class="u-user_extra_info">

                <li><span>E-mail:</span><span>{{$data['user_info']['email']}}</span></li>

        </ul>
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_info/personal_info.css")}}
@stop