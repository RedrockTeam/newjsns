<form action="{{route('home/movie/createmovie')}}" method="post" enctype="multipart/form-data" class="@if( $data['page_pos'] != 1 ){{'f-dn'}}@endif m-movie_form js-form_movie">
    <div class="form-group">
        <label for="movie_name">请输入视频名称</label>
        <input type="text" class="form-control" name="title" id="movie_name" placeholder="微视名称"/>
    </div>
    <div class="form-group">
        <label for="movie_desc">请输入视频描述</label>
        <input type="text" class="form-control" name="introduce" id="movie_desc" placeholder="微视描述"/>
    </div>
     <div class="form-group">
                <label for="passage_name">请选择视频类别</label>
                <br/>
                <select name="type_id" id="">
                    @foreach($data['micromovie_type'] as $type)
                        <option value="{{$type['id']}}">{{$type['type']}}</option>
                    @endforeach
                </select>
        </div>
    <div class="form-group">
        <label for="movie_cover">请上传影片截图(218px X 130px)</label>
        <input type="file" name="cover_url" class="js-upload_movie" accept="image/gif, image/jpeg, image/png" id="movie_cover"/>
    </div>
    <div class="form-group">
        <label for="movie_content">请填写影片URL</label>
        <input type="text" class="form-control" name="url" id="movie_url" placeholder="影片链接(swf)"/>
    </div>
    <button type="submit" class="btn btn-default">确定</button>
</form>

@section("css")
    @parent
    {{HTML::style("css/widget/upload_movie/upload_movie.css", [], true)}}
@stop