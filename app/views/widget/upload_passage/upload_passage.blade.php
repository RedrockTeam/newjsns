<form action="" method="POST" enctype="multipart/form-data" class="@if( $page_pos != 2 ){{'f-dn'}}@endif m-passage_form js-form_passage">
    <div class="form-group">
        <label for="passage_name">请输入文章标题</label>
        <input type="text" class="form-control" name="ablum_name" id="passage_name" placeholder="相册名称"/>
    </div>
    <div class="form-group">
        <label for="passage_cover">请上传文章封面(可选)</label>
        <input type="file" accept="image/gif, image/jpeg, image/png"/>
    </div>
    <div class="form-group">
            <label for="passage_cover">文章内容</label>
            @include("widget.ueditor.ueditor")
    </div>
    <button type="submit" class="btn btn-default">确定</button>
</form>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_passage/upload_passage.css")}}
@stop
