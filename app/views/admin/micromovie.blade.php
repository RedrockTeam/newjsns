
@extends("admin.template")

{{--二级导航--}}
@section('s_nav')

    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li class="active"><a href="">微视管理</a></li>
    </ul>

@stop


@section('content')
    <div class="row"><div class="col-md-12"><h1>微视管理</h1></div></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>类型</th>
                                    <th>标题</th>
                                    <th>作者</th>
                                    <th>状态</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $v)
                                <tr>
                                    <td>{{$v['id']}}</td>
                                    <td>{{$v['navigation']['type']}}</td>
                                    <td>{{$v['title']}}</td>
                                    <td>{{$v['user']['username']}}</td>
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
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">{{$data->links()}}</div>
            </div>
@stop

@section('myscript')
    <script>
        $('.btn.btn-xs.btn-danger').bind('click',function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/micromovie/manage')}}",

                type: 'post',

                data:{"oprator_id":0, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data==200){
                        button.parent().parent().prev().html("冻结");
                    }
                }
            });
        });

        $('.btn.btn-xs.btn-success').bind('click',function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/micromovie/manage')}}",

                type: 'post',

                data:{"oprator_id":1, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data==200){
                        button.parent().parent().prev().html("正常");
                    }
                }
            });
        });
    </script>
@stop