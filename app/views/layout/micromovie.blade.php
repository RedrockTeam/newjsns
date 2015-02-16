<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>微视</title>
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
