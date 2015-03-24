@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked" xmlns="http://www.w3.org/1999/html">
        <li class="active" id="user"><a href="#">用户管理</a></li>
        <li id="group"><a href="#">用户组管理</a></li>
        <li id="auth"><a href="#">权限管理</a></li>
    </ul>
@stop

@section('content')
    {{--用户管理--}}
    <div class="user">
        @if($errors)
            @foreach ($errors->editgroup->all() as $error)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{$error}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row">
            <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>学号</th>
                            <th>用户名</th>
                            <th>状态</th>
                            <th>用户组</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['user'] as $key => $user)
                            <form class="form-horizontal" action="{{route('admin/user/editgroup')}}" method="post">
                            <tr>
                                <td>{{$user['id']}}</td>
                                <input type="hidden" value="{{$user['id']}}" name="uid"/>
                                <td>{{$user['uid']}}</td>
                                <td>{{$user['username']}}</td>
                                <td>{{$user['status']==0?'冻结':'正常';}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-xs-6 ">
                                        <select class="form-control" name="type_id">

                                            @foreach($data['rolelist'] as $role)
                                                <option value="{{$role['id']}}" {{$user['getType'][0]['id'] == $role['id']?'selected="selected"':''}} >{{$role['name']}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span><input type="submit" class="btn btn-xs btn-warning" value="修改" ></span>
                            </form>
                                    <span><button class="btn btn-xs btn-danger">冻结</button></span>
                                    <span><button class="btn btn-xs btn-success">恢复</button></span>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-form" role="search">
                        <select class="form-control">
                            <option value="1">按用户昵称搜索</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="userinfo" placeholder="Search">
                        </div>
                        <button type="submit"  class="btn btn-default" id="usersearch">搜索</button>
                    </div>
                </div>
            </div>
    </div>
    {{--用户组管理--}}
    <div class="group" style="display: none">
        @if($errors)
            @foreach ($errors->group->all() as $error)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{$error}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row">
            <form class="form-horizontal" action="{{route('admin/user/addgroup')}}" method="post">
            <h1>添加用户组</h1>
            <div class="col-md-4">
                <div class="input-group">
                      <input type="text" class="form-control" placeholder="用户组名称..." name="name">
                      <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="添加">
                      </span>
                </div>
            </div>
            </form>
        </div>
        <div class="row">
            <form class="form-horizontal" action="{{route('admin/user/delgroup')}}" method="post">
                <h1>删除用户组</h1>
                <div class="col-md-8">
                    <div class="col-xs-6">
                        <select class="form-control" name="id">
                        @foreach($data['rolelist'] as $role)
                            <option value="{{$role['id']}}"}} >{{$role['name']}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="col-xs-6">
                     <input type="submit" class="btn btn-danger del" value="删除">
                    </div>
                </div>
            </form>
        </div>

    </div>
    {{--权限管理--}}
    <div class="auth" style="display: none">
        @if($errors)
            @foreach ($errors->route->all() as $error)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{$error}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        @foreach($data['rolelist'] as $key => $role)
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-12">
                         <h2>
                             <span>用户组:</span>
                             <span>{{$role['name']}}</span>
                         </h2>
                        </div>
                    </div>
                    <div class="row">
                        <form class="form-horizontal" action="{{route('admin/user/addroute')}}" method="post">
                            <div class="col-xs-4">
                                <input type="hidden" name="type_id" value="{{$role['id']}}"/>
                                <select class="form-control" name="path_id">
                                    @foreach($data['routelist'] as $route)
                                        <option value="{{$route['id']}}">{{$route['path']}} | {{$route['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-8">
                                <input type="submit" class="btn btn-success add" value="添加">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>路由</th>
                            <th>功能</th>
                            <th>删除</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($data['grouplist'][$key] as $list)
                             <form class="form-horizontal" action="{{route('admin/user/delroute')}}" method="post">
                                <tr>
                                    <input type="hidden" name="role_id" value="{{$role['id']}}"/>
                                    <td>{{$list['id']}}</td>
                                    <input type="hidden" name="id" value="{{$list['id']}}"/>
                                    <td>{{$list['path']}}</td>
                                    <td>{{$list['name']}}</td>
                                    <td>
                                        <span><input class="btn btn-xs btn-danger del" type="submit" value="删除"></span>
                                    </td>
                                </tr>
                             </form>
                         @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
        </div>
@stop

@section('myscript')
    <script>
        $('#user').bind('click', function(){
            $('#user').attr('class', 'active');
            $('#group').attr('class', '');
            $('#auth').attr('class', '');
            $('.user').css('display', 'block');
            $('.group').css('display', 'none');
            $('.auth').css('display', 'none');
        });
        $('#group').bind('click', function(){
            $('#group').attr('class', 'active');
            $('#user').attr('class', '');
            $('#auth').attr('class', '');
            $('.group').css('display', 'block');
            $('.user').css('display', 'none');
            $('.auth').css('display', 'none');
        });
        $('#auth').bind('click', function(){
            $('#auth').attr('class', 'active');
            $('#group').attr('class', '');
            $('#user').attr('class', '');
            $('.auth').css('display', 'block');
            $('.group').css('display', 'none');
            $('.user').css('display', 'none');
        });

        $('.user table').on('click', '.btn.btn-xs.btn-danger', function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/user/manage')}}",

                type: 'post',

                data:{"oprator_id":0, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data==200){
                        button.parent().parent().prev().prev().html("冻结");
                    }
                }
            });
        });

        $('.user table').on('click', '.btn.btn-xs.btn-success', function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/user/manage')}}",

                type: 'post',

                data:{"oprator_id":1, "id":id},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data==200){
                        button.parent().parent().prev().prev().html("正常");
                    }
                }
            });
        });
        function compare(status){
            return (status==0)?'冻结':'正常';
        }
        $('#usersearch').on('click', function(){
            var info = $("#userinfo").val();
            if(info.length==0){
                alert('搜索内容不能为空!');
            }
            $.ajax({
                url: "{{route('admin/user/search')}}",

                type: 'post',

                data:{"content":info},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data.status == 200){
                        $(".user tbody").remove();
                        $('.user thead').after("<tbody></tbody>");
                        for(var i = 0; i < data.data.length; i++){
                            $('.user tbody').append(
                                    "<tr>" +
                                    "<td>"+data.data[i].id+"</td>" +
                                    "<td>"+data.data[i].uid+"</td>" +
                                    "<td>"+data.data[i].username+"</td>" +
                                    "<td>"+compare(data.data[i].status)+"</td>" +
                                    "<td>"+data.data[i].get_type[0].name+"</td>" +
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
        })
</script>
@stop