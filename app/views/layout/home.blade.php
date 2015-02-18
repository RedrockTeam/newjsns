<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>home</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>

{{--container--}}
<section class="g-container">
    @yield("container")
</section>


{{--footer--}}
<footer class="g-footer">
    @yield("footer")
</footer>

{{--widget 登陆框--}}
<section class="g-login_box js-login_box">
    @yield("login_box")
</section>

</body>
@yield("script")
</html>
