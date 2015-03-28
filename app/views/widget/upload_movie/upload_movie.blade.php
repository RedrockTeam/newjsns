<form action="" class="m-movie_form">
    <div class="form-group">
        <label for="movie_name">请输入视频名称</label>
        <input type="text" class="form-control" name="movie_name" id="movie_name" placeholder="微视名称"/>
    </div>
    <div class="form-group">
        <label for="movie_desc">请输入视频描述</label>
        <input type="text" class="form-control" name="movie_desc" id="movie_desc" placeholder="微视名称"/>
    </div>
    <div class="form-group">
        <label for="movie_cover">请上传影片截图</label>
        <input type="file" name="movie_cover" class="js-upload_movie" accept="image/gif, image/jpeg, image/png" id="movie_cover"/>
    </div>
    <div class="form-group">
        <label for="movie_content">请上传影片</label>
        <input type="file" name="movie_content" class="js-upload_movie" accept="" id="movie_content"/>
    </div>
    <button type="submit" class="btn btn-default">确定</button>
</form>
@section("css")
    @parent
    {{HTML::style("public/css/widget/upload_movie/upload_movie.css")}}
@stop