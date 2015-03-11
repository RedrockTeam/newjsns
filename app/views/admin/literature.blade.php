
@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li class="active"><a href="">文章管理</a></li>
    </ul>
@stop


@section('content')
    <div class="row"><div class="col-md-12"><h1>文章管理</h1></div></div>
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
                            @foreach($data as $value)
                                <tr>
                                    <td>{{$value['id']}}</td>
                                    <td>{{$value['navigation']['type']}}</td>
                                    <td>{{$value['title']}}</td>
                                    <td>{{$value['user']['username']}}</td>
                                    <td>{{$value['status']==0?'冻结':'正常';}}</td>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-form" role="search">
                        <select class="form-control">
                            <option value="1">按文章id搜索</option>
                            <option value="2">按文章标题搜索</option>
                            <option value="3">按作者搜索</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default" id="search">搜索</button>
                    </div>
                </div>
            </div>
@stop

@section('myscript')
    <script>
        function compare(status){
            return (status==0)?'冻结':'正常';
        }
        $("#search").on('click', function(){
            var search_type = $('select.form-control').val();
            var search_content = $('input.form-control').val();
            if(search_content.length==0){
                alert('搜索内容不能为空!');
            }
            $.ajax({
                url: "{{route('admin/literature/search')}}",

                type: 'post',

                data:{"search_type":search_type, "search_content":search_content},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data.status == 200){
                        $("tbody").remove();
                        $('thead').after("<tbody></tbody>");
                        for(var i = 0; i < data.data.length; i++){
                            $('tbody').append(
                            "<tr>" +
                                "<td>"+data.data[i].id+"</td>" +
                                "<td>"+data.data[i].navigation.type+"</td>" +
                                "<td>"+data.data[i].title+"</td>" +
                                "<td>"+data.data[i].user.username+"</td>" +
                                "<td>"+compare(data.data[i].status)+"</td>" +
                                "<td>" +
                                    "<span>" +
                                        "<button class='btn btn-xs btn-danger'>冻结</button>" +
                                    "</span>" +
                                    "<span>" +
                                        "<button class='btn btn-xs btn-success'>恢复</button>" +
                                    "</span>" +
                                "</td>" +
                            "</tr>")
                        }
                    }
                }
            });
        });

        $('table').on('click', '.btn.btn-xs.btn-danger', function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/literature/manage')}}",

                type: 'post',

                data:{"operator_id":0, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data == 200){
                         button.parent().parent().prev().html("冻结");
                    }
                }
            });
        });

        $('table').on('click', '.btn.btn-xs.btn-success', function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/literature/manage')}}",

                type: 'post',

                data:{"operator_id":1, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data == 200){
                        button.parent().parent().prev().html("正常");
                    }
                }
            });
        });
    </script>
@stop