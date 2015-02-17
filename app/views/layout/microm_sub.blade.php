<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>微视分页</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
{{--top_bar--}}
<section class="g-top_bar">
    @yield("top_bar")
</section>

{{--header--}}
<header class="g-header">
    @yield("header")
</header>

{{--container--}}
<section class="g-container f-cb">
    @yield("container")
</section>
{{--widget 登陆框--}}
<section class="g-login_box js-login_box">
    @yield("login_box")
</section>

{{--footer--}}
<footer class="g-footer">
    @yield("footer")
</footer>
<section class="g-go g-go_top">
    @yield("go_top")
</section>

</body>
@yield("script")
</html>
