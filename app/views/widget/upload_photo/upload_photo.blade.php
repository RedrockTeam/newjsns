<form action="" method="POST" enctype="multipart/form-data" class="m-photo_form js-photo_form">
  <div class="form-group">
    <label for="ablum_name">请输入相册名称</label>
    <input type="text" class="form-control" name="ablum_name" id="ablum_name" placeholder="相册名称"/>
  </div>
  <div class="checkbox">
      <label>
        <input type="checkbox" class="js-check-isAblum"> 是否多图上传？
      </label>
    </div>
  <div class="form-group">
    <label for="photo_anme">请输入图片名称</label>
    <input type="text" class="form-control js-photo_name" name="photo_anme" id="photo_anme" placeholder="图片名称"/>
  </div>
  <div class="form-group">
    <label for="photo_desc">请输入图片描述</label>
    <input type="text" class="form-control" id="photo_desc" placeholder="图片描述"/>
  </div>
  <div class="form-group">
      <label for="photo_file">选择文件</label>
      <div id="wrapper">
              <div id="container">
                  <!--头部，相册选择和格式选择-->

                  <div id="uploader">
                      <div class="queueList">
                          <div id="dndArea" class="placeholder">
                              <div id="filePicker"></div>
                              <p>或将照片拖到这里，单次最多可选300张</p>
                          </div>
                      </div>
                      <div class="statusBar" style="display:none;">
                          <div class="progress">
                              <span class="text">0%</span>
                              <span class="percentage"></span>
                          </div><div class="info"></div>
                          <div class="btns">
                              <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </div>
  <button type="submit" class="btn btn-default">确定</button>
</form>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_photo/upload_photo.css")}}
    {{HTML::style("public/complexPlugin/webuploader/css/webuploader.css")}}
    {{HTML::style("public/complexPlugin/webuploader/imguploader/style.css")}}
@stop