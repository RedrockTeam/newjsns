<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="ablum_name">请输入相册名称</label>
    <input type="text" class="form-control" name="ablum_name" id="ablum_name" placeholder="相册名称"/>
  </div>
  <div class="checkbox">
      <label>
        <input type="checkbox"> 是否多图上传？
      </label>
    </div>
  <div class="form-group">
    <label for="photo_anme">请输入图片名称</label>
    <input type="text" class="form-control" name="photo_anme" id="photo_anme" placeholder="图片名称"/>
  </div>
  <div class="form-group">
    <label for="photo_desc">请输入图片描述</label>
    <input type="text" class="form-control" id="photo_desc" placeholder="图片描述"/>
  </div>
  <div class="form-group">
      <label for="photo_file">选择文件</label>
      <input type="file" class="js-upload_photo" id="photo_file">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

@section("css")
    @parent
    {{HTML::style("public/complexPlugin/uploadify/uploadify.css")}}
@stop