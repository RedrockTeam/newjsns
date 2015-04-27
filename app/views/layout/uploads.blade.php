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
    <div class="page-header f-cb">
      <h1>上传<small>Uploads File</small></h1>
      <a href="/home/personal" class="f-fr">返回个人中心</a>
    </div>
    <ul class="nav nav-tabs js-tabs" >
      <li role="presentation" class="@if( $data['page_pos'] == 0 ){{'active'}}@endif js-photo" ><a href="#">图片</a></li>
      <li role="presentation" class="@if( $data['page_pos'] == 1 ){{'active'}}@endif js-movie" ><a href="#">视频</a></li>
      <li role="presentation" class="@if( $data['page_pos'] == 2 ){{'active'}}@endif js-passage" ><a href="#">文章</a></li>
      <li role="presentation" class="@if( $data['page_pos'] == 3 ){{'active'}}@endif js-ori" ><a href="#">原味</a></li>
    </ul>
    @yield("form")
</div>
</body>
@yield("script")
</html>
