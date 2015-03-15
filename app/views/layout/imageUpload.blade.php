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
    <div class="page-header f-pr">
      <h1>上传图片<small>Upload Images</small></h1>
      @if($imgExists) <div class="u-show_thumb_img"> <img src="{{$imgSrc}}" alt=""/></div> @endif
      <button class="u-submit-form btn btn-default js-@if($imgExists){{"save"}}@else{{"upload"}}@endif-form">@if($imgExists){{"保存"}}@else{{"确定"}}@endif</button>
    </div>
    {{--container--}}
    <section class="f-cb">
        @yield("container")
    </section>
</section>
</body>
@yield("script")
</html>
