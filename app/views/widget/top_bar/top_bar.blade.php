<div class="g-top_bar_wrapper f-cb">
    @if(Session::get('nickname'))
        <div class="f-fr u-info" data-user_id="{{Session::get('uid')}}">
            Hello! <a href="personal"> {{Session::get('nickname')}}</a>
            <a href="{{route('logout')}}">注销</a>
        </div>
    @else
        <div class="u-login_register f-fr js-open_login_box">登陆/注册</div>
    @endif
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/top_bar/top_bar.css")}}
@stop