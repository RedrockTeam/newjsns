@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li id="manage" class="active"><a href="#">读书影逝管理</a></li>
        <li id="add" ><a href="#">读书影逝添加</a></li>
    </ul>
@stop

@section('content')
    <div class="add" style="display: none;">
        <div class="row"><div class="col-md-12"><h1>读书影逝添加</h1></div></div>
        <form class="form-horizontal">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="标题">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">封面</label>
                    <input type="file" id="exampleInputFile">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="作者">
                </div>
            </div>
        </div>
        <div class="row">
             <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="价格">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="出版社">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="原书标题(支持各个国家语言)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="译者">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="总页数">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="出版时间">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <textarea class="form-control" rows="3" placeholder="简介"></textarea>
            </div>
        </div>
            <div class="row">&nbsp;</div>
        <div class="row">
             <div class="col-md-4"><input type="submit" class="btn btn-default"></div>
        </div>
        </form>
    </div>

    <div class="manage" >
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>标题</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $v)
                            <tr>
                                <td>{{$v['id']}}</td>
                                <td>{{$v['title']}}</td>
                                <td>{{$v['status']==0?'冻结':'正常';}}</td>
                                <td>
                                    <span><button class="btn btn-xs btn-danger">冻结</button></span>
                                    <span><button class="btn btn-xs btn-success">恢复</button></span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row"><div class="col-md-12">{{$data->links()}}</div></div>
            </div>
        </div>
    </div>
@stop

@section('myscript')
    <script>
        $('#add').bind('click', function(){
            $('#manage').attr('class', '');
            $('#add').attr('class', 'active');
            $('.manage').css('display', 'none');
            $('.add').css('display', 'block');
        });
        $('#manage').bind('click', function(){
            $('#add').attr('class', '');
            $('#manage').attr('class', 'active');
            $('.add').css('display', 'none');
            $('.manage').css('display', 'block');
        });
    </script>
@stop