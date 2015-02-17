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
<section class="g-container f-cb">
    @yield("container")
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
