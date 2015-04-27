<form action="{{route('home/literature/createpassage')}}" method="POST" enctype="multipart/form-data" class="@if( $data['page_pos'] != 2 ){{'f-dn'}}@endif m-passage_form js-form_ori">
   {{-- <div class="form-group">
        <label for="passage_name">请输入文章标题</label>
        <br/>
        <input type="text" class="form-control" name="title" id="passage_name" placeholder="文章标题"/>
    </div>
     <div class="form-group">
            <label for="passage_name">请选择文章类别</label>
            <br/>
            <select name="type_id" id="">
                @foreach($data['passage_type'] as $type)
                <option value="{{$type['id']}}">{{$type['type']}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group">
        <label for="passage_cover">请上传文章封面(可选)</label>
        <br/>
        <input type="file" name="cover" accept="image/gif, image/jpeg, image/png"/>
    </div>
    <div class="form-group">
            <label for="passage_cover">文章内容</label>
            <div id="editor">
            </div>
            <textarea name="content" class="s-hidden js-hidden_content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-default">确定</button>--}}
    <div>serueudhgtrhju8</div>
</form>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_passage/upload_passage.css")}}
    {{HTML::style("http://cdn.gbtags.com/font-awesome/4.1.0/css/font-awesome.min.css")}}
    {{HTML::style("http://cdn.gbtags.com/summernote/0.5.2/summernote.css")}}
@stop
