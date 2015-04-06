<form action="{{route('home/literature/createpassage')}}" method="POST" enctype="multipart/form-data" class="@if( $page_pos != 2 ){{'f-dn'}}@endif m-passage_form js-form_passage">
    <div class="form-group">
        <label for="passage_name">请输入文章标题</label>
        <br/>
        <input type="text" class="form-control" name="ablum_name" id="passage_name" placeholder="相册名称"/>
    </div>
     <div class="form-group">
            <label for="passage_name">请选择文章类别</label>
            <br/>
            <select name="passage_class" id="">
                <option value="df">言情类</option>
            </select>
    </div>
    <div class="form-group">
        <label for="passage_cover">请上传文章封面(可选)</label>
        <br/>
        <input type="file" accept="image/gif, image/jpeg, image/png"/>
    </div>
    <div class="form-group">
            <label for="passage_cover">文章内容</label>
            <div id="editor">
            </div>
    </div>
    <button type="submit" class="btn btn-default">确定</button>
</form>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_passage/upload_passage.css")}}
    {{HTML::style("http://cdn.gbtags.com/font-awesome/4.1.0/css/font-awesome.min.css")}}
    {{HTML::style("http://cdn.gbtags.com/summernote/0.5.2/summernote.css")}}
@stop
