<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>文学</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
{{--top_bar--}}
<div class="g-top_bar">
    @yield("top_bar")
</div>

{{--header--}}
<header class="g-header">
    @yield("header")
</header>

{{--container--}}
<div class="g-container">
    @yield("container")
</div>

{{--footer--}}
<footer class="g-footer">
    @yield("footer")
</footer>

{{--widget 返回顶部--}}
<div class="g-go_top">
    @yield("go_top")
</div>
{{--widget 登陆框--}}
<div class="g-login_box js-login_box">
    @yield("login_box")
</div>

</body>
@yield("script")
</html>
