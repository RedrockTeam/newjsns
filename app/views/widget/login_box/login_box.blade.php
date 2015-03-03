<div id="loginBox" class="js-stop_click_close">
    <span id="loginBox-close" class="js-close_login_box"></span>
    <div id="loginBox-title">
        重邮通行证
    </div>
    <form action='home/login' method="POST">
        <div>
            <img src="public/images/user.png" />
            <input type="text" name='username' placeholder="请输入通行证账号"  id="login-input" class="u-input">
        </div>
        <div>
            <img id="u-pwd-icon" src="public/images/password.png" />
            <input type="password" name='password' placeholder="请输入通行证密码" id="login-password" class="u-input">
        </div>
        <div id="login-register">
            <a href="" id="login-register-text">注册</a> | <a href="">忘记密码</a>
        </div>
        <input type="submit" value="登录" name='do' id="login-button"/>
    </form>

</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/login_box/login_box.css")}}
@stop