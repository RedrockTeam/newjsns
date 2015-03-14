<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>登陆/注册</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
{{--banner--}}
<section class="u-banner">
</section>

{{--login-register---}}
<section class="m-login-register-case">
    @yield("login-register-case")
</section>
</body>
@yield("script")
</html>
