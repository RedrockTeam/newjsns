@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li class="active" id="album"><a href="#">相册管理</a></li>
        <li id="photo"><a href="#">相片管理</a></li>
    </ul>
@stop

@section('content')
    <div class="album">
        <div class="row"><div class="col-md-12"><h1>相册管理</h1></div></div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>类型</th>
                            <th>相册名称</th>
                            <th>作者</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['album'] as $album)
                            <tr>
                                <td>{{$album['id']}}</td>
                                <td>{{$album['navigation']['type']}}</td>
                                <td>{{$album['album_name']}}</td>
                                <td>{{$album['user']['username']}}</td>
                                <td>{{$album['status']==0?'冻结':'正常';}}</td>
                                <td>
                                    <span><button class="btn btn-xs btn-danger">冻结</button></span>
                                    <span><button class="btn btn-xs btn-success">恢复</button></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">{{$data['album']->links()}}</div>
        </div>

    </div>
    <div class="photo" style="display: none">
        <div class="row"><div class="col-md-12"><h1>相片管理</h1></div></div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>所属相册</th>
                            <th>相片名称</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['photos'] as $photo)
                            <tr>
                                <td>{{$photo['id']}}</td>
                                <td>{{$photo['findFather']['album_name']}}</td>
                                <td>{{$photo['title']}}</td>
                                <td>{{$album['status']==0?'冻结':'正常';}}</td>
                                <td>
                                    <span><button class="btn btn-xs btn-danger">冻结</button></span>
                                    <span><button class="btn btn-xs btn-success">恢复</button></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">{{$data['photos']->links()}}</div>
        </div>

    </div>
@stop

@section('myscript')
    <script>
        $('#photo').bind('click', function(){
            $('#album').attr('class', '');
            $('#photo').attr('class', 'active');
            $('.album').css('display', 'none');
            $('.photo').css('display', 'block');
        });
        $('#album').bind('click', function(){
            $('#photo').attr('class', '');
            $('#album').attr('class', 'active');
            $('.photo').css('display', 'none');
            $('.album').css('display', 'block');
        });
    </script>
@stop