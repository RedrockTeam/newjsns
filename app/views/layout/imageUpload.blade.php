<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>上传头像</title>
<!--[if lt IE 9]>
@yield("html5js")
<![endif]-->
@yield("css")
</head>
<body>
<section class="container">
    {{--header--}}
    <div class="page-header f-pr f-cb">
      <h1>上传图片<small>Upload Images</small></h1>
      <a href="{{route('personal')}}" class="f-fr">返回个人中心</a>
      @if($imgExists)
      <button class="u-submit-form btn btn-default js-save-form">保存</button>
      @endif
    </div>
    {{--container--}}
    <section class="f-cb">
        @yield("container")
    </section>
</section>
</body>
@yield("script")
</html>
