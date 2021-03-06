<div class="g-top_bar_wrapper f-cb">
    @if(Session::get('nickname'))
        <div class="f-fr u-info js-user_own_info" data-user_id="{{Session::get('uid')}}">
            Hello! <a href="{{route('personal')}}" class="js-user_name"> {{Session::get('nickname')}}</a>
            <a href="{{route('logout')}}">注销</a>
        </div>
    @else
        <div class="u-login_register f-fr js-open_login_box"><a href="{{route('login')}}">登陆/注册</a></div>
    @endif
</div>

@section("css")
    @parent
    {{HTML::style("css/widget/top_bar/top_bar.css", [], true)}}
@stop