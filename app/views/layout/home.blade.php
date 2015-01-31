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
<div class="g-container">
    @yield("container")
</div>

{{--footer--}}
<footer class="g-footer">
    @yield("footer")
</footer>
</body>
@yield("script")
</html>
