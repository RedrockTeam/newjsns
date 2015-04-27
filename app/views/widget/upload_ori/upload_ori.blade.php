<form action="{{route('home/original/createoriginal')}}" data-action="{{route('home/original/createuporiginal')}}" method="POST" enctype="multipart/form-data" class="@if( $data['page_pos'] != 2 ){{'f-dn'}}@endif m-passage_form js-form_ori">
    <div class="form-group">
        <label for="ori_name">标题</label>
        <br/>
        <input type="text" class="form-control" name="title" id="ori_name" placeholder="原味标题"/>
    </div>
     <div class="form-group">
            <label for="ori_name">请选择类别</label>
            <br/>
            <select name="type_id" id="" class="js-ori_type">
                @foreach($data['original_type'] as $type)
                    <option value="{{$type['id']}}">{{$type['type']}}</option>
                @endforeach
            </select>
    </div>
    <div class="form-group js-type_work">
        <label for="ori_cover">请上传作品封面</label>
        <br/>
        <input type="file" name="cover" accept="image/gif, image/jpeg, image/png"/>
    </div>
    <div class="form-group js-type_link">
            <label for="ori_url">链接</label>
            <br/>
            <input type="text" class="form-control" name="title" id="ori_url" placeholder="请输入作品链接"/>
    </div>
    <div class="form-group">
                <label for="ori_intro">文章简介</label>
                <br/>
                <textarea class="form-control" rows="3"></textarea>
        </div>
    <button type="submit" class="btn btn-default">确定</button>
</form>

@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_passage/upload_passage.css")}}
    {{HTML::style("http://cdn.gbtags.com/font-awesome/4.1.0/css/font-awesome.min.css")}}
    {{HTML::style("http://cdn.gbtags.com/summernote/0.5.2/summernote.css")}}
@stop
