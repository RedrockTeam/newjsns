<div class="m-login-register-case">
    {{--tab切换--}}
    <menu class="u-tabs f-cb">
        <li class="s-active f-fl js-open-login">登陆</li><li class="f-fl js-open-register">注册</li>
    </menu>
    {{--登陆 默认关闭--}}
    <form action="{{route('home/login')}}" novalidate method="POST"  class="u-login s-form js-login-form">
        @if($errors)
            @foreach ($errors->login->all() as $error)
                <p class="alert alert-warning">{{ $error }}</p>
            @endforeach
        @endif
        <div class="f-pr"><input type="text" class="u-stu_id js-check" name="username" data-check_type="stu_id"  placeholder="统一认证码"/><span class="s-error">+</span></div>
        <div class="f-pr"><input type="password" class="u-stu_pwd js-check" name="password" data-check_type="stu_pwd" placeholder="密码（身份证后六位）"/><span class="s-error">+</span></div>
        <input type="submit" value="登陆"/>
    </form>
    {{--注册 默认打开--}}
    <form action="{{route('home/register')}}" novalidate method="POST" class="u-register s-form js-login-form">
        @if($errors)
            @foreach ($errors->register->all() as $error)
                <p class="alert alert-warning">{{ $error }}</p>
            @endforeach
        @endif
        <div class="f-pr"><input type="text" class="u-stu_id js-check" name="stu_id" data-check_type="stu_id"  placeholder="统一认证码"/><span class="s-error">+</span></div>
        <div class="f-pr"><input type="password" class="u-stu_pwd js-check" name="stu_pwd" data-check_type="stu_pwd" placeholder="密码（身份证后六位）"/><span class="s-error">+</span></div>
        <div class="f-pr"><input type="text" class="u-stu_nickname js-check" name="stu_nickname" data-check_type="stu_nickname" placeholder="昵称"/><span class="s-error">+</span></div>
        <input type="submit" value="注册"/>
    </form>


</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/login-register-case/login-register-case.css")}}
@stop