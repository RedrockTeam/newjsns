@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li class="active" id="user"><a href="#">用户管理</a></li>
        <li id="group"><a href="#">用户组管理</a></li>
        <li id="auth"><a href="#">权限管理</a></li>
    </ul>
@stop

@section('content')
    {{--用户管理--}}
    <div class="user">
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-6 ">
                                    <select class="form-control ">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    </div>
                                </div>

                            </td>
                            <td>
                                <span><button class="btn btn-xs btn-warning">修改</button></span>
                                <span><button class="btn btn-xs btn-danger">冻结</button></span>
                                <span><button class="btn btn-xs btn-success">恢复</button></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    {{--用户组管理--}}
    <div class="group" style="display: none">
        <div class="row">
            <h1>添加用户组</h1>
            <div class="col-md-12">
                <div class="input-group">
                      <input type="text" class="form-control" placeholder="用户组名称...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">添加</button>
                      </span>
                </div>
            </div>
        </div>
        <div class="row">
            <h1>删除用户组</h1>
            <div class="col-md-12">
                <div class="col-xs-6">
                    <select class="form-control ">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-xs-6">
                 <button type="button" class="btn btn-danger">删除</button>
                </div>
            </div>
        </div>
    </div>
    {{--权限管理--}}
    <div class="auth" style="display: none">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-12">
                         <h2>
                             <span>用户组:</span>
                             <span>hhh</span>
                         </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <select class="form-control ">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-xs-8">
                            <button type="button" class="btn btn-success">添加</button>
                        </div>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <span><button class="btn btn-xs btn-danger">删除</button></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    </script>
@stop