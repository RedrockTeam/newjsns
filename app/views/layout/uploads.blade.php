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
    <ul class="nav nav-tabs js-tabs" >
      <li role="presentation" class="@if( $page_pos == 0 ){{'active'}}@endif" data-tab="photo"><a href="#">图片</a></li>
      <li role="presentation" class="@if( $page_pos == 1 ){{'active'}}@endif" data-tab="movie"><a href="#">视频</a></li>
      <li role="presentation" class="@if( $page_pos == 2 ){{'active'}}@endif" data-tab="passage"><a href="#">文章</a></li>
    </ul>
    @yield("form")
</div>
</body>
@yield("script")
</html>
