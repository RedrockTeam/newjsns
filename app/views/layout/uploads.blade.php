<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>上传图片</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
<div class="container">
    <div class="page-header">
      <h1>上传<small>Uploads File</small></h1>
    </div>
    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="#">图片</a></li>
      <li role="presentation"><a href="#">视频</a></li>
      <li role="presentation"><a href="#">文章</a></li>
    </ul>
    @yield("form")
</div>
</body>
@yield("script")
</html>
