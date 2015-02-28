<div class="g-top_bar_wrapper f-cb">
    @if(isset($user_info["user_name"]))
        <div class="f-fr u-info" data-user_id="">
            hello!<a href=""> {{$user_info["user_name"]}}</a>
            <a href="">注销</a>
        </div>
    @else
        <div class="u-login_register f-fr js-open_login_box">登陆/注册</div>
    @endif
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/top_bar/top_bar.css")}}
@stop