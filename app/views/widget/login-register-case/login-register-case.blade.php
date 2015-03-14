<menu class="u-tabs f-cb">
    <li class="s-active f-fl js-open-register">注册</li><li class="f-fl js-open-login">登陆</li>
</menu>

<form action="" class="u-register s-form">
    <div><input type="text" class="u-stu_id" name="stu_id" placeholder="学号"/></div>
    <div><input type="text" class="u-stu_pwd" name="stu_pwd" placeholder="密码"/></div>
    <div><input type="text" class="u-stu_nickname" name="stu_nickname" placeholder="昵称"/></div>
    <input type="submit" value="注册"/>
</form>
<form action="" class="u-login s-form">
    <div><input type="text" class="u-stu_id" name="stu_id" placeholder="学号"/></div>
    <div><input type="text" class="u-stu_pwd" name="stu_pwd" placeholder="密码"/></div>
    <input type="submit" value="登陆"/>
</form>
@section("css")
    @parent
    {{HTML::style("public/css/widget/login-register-case/login-register-case.css")}}
@stop