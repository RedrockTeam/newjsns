<form action="{{route('home/updateAlbum')}}" method="POST" enctype="multipart/form-data" class="@if( $data['page_pos'] != 0 ){{'f-dn'}}@endif m-photo_form js-form_photo">
  <div class="form-group">
    <label for="ablum_name">请输入相册名称</label>
    <input type="text" class="form-control" name="ablum_name" id="ablum_name" placeholder="相册名称"/>
  </div>
    <div class="form-group">
        <label for="passage_name">请选择图片类别</label>
        <br/>
        <select name="photo_type" id="">
            @foreach($data['photo_type'] as $type)
                <option value="{{$type['id']}}">{{$type['type']}}</option>
            @endforeach
        </select>
    </div>
  <div class="checkbox">
      <label>
        <input type="checkbox" class="js-check-isAblum"> 是否多图上传？
      </label>
    </div>
  <div class="form-group">
    <label for="photo_anme">请输入图片名称</label>
    <input type="text" class="form-control js-photo_name" name="photo_name" id="photo_anme" placeholder="图片名称"/>
  </div>
  <div class="form-group">
    <label for="photo_desc">请输入图片描述</label>
    <input type="text" class="form-control" name="introduce"  id="photo_desc" placeholder="图片描述"/>
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
</form>
<script>var uploadpath = "{{route('home/upload')}}";</script>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_photo/upload_photo.css")}}
    {{HTML::style("public/complexPlugin/webuploader/css/webuploader.css")}}
    {{HTML::style("public/complexPlugin/webuploader/imguploader/style.css")}}
@stop