<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>个人中心</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
{{--container--}}
<div class="g-container f-cb">
    @yield("container")
</div>

{{--footer--}}
<footer class="g-footer">
    @yield("footer")
</footer>
<div class="g-go g-go_top">
    @yield("go_top")
</div>

</body>
@yield("script")
</html>
