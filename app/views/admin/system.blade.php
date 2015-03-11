@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li id="nav" class="active"><a href="#">导航管理</a></li>
        <li id="route" ><a href="#">路由管理</a></li>
        <li id="ssh"><a href="#">S SH(test)</a></li>
    </ul>
@stop

@section('content')
    {{--导航管理--}}
    <div class="navigation">
            @if($errors)
                @foreach ($errors->nav->all() as $error)
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
            <div class="col-md-6">
               <form class="form-horizontal" method="post" action="{{route('admin/system/addnav')}}">
                   <div class="row"><div class="col-md-12"><h2>一级导航管理</h2></div></div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="一级导航名称..." name="type">
                                <input type="text" class="form-control" placeholder="表名" name="table_name">
                                <input type="hidden" value="0" name="father_id">
                                <span class="input-group-btn">
                                   <input type="submit" class="btn btn-default" value="添加"/>
                                </span>
                            </div>
                        </div>
                    </div>
               </form>
            </div>
            <div class="col-md-6">
                <form class="form-horizontal" action="{{route('admin/system/addnav')}}" method="post">
                    <div class="row"><div class="col-md-12"><h2>二级导航管理</h2></div></div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col-xs-4">
                                <select class="form-control" name="father_id">
                                    @foreach($data['navigation'] as $nav)
                                        <option value="{{$nav['id']}}">{{$nav['type']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="二级导航名称..." name="type">
                                    <span class="input-group-btn">
                                        <input class="btn btn-default" type="submit" value="添加">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--路由管理--}}
    <div class="route" style="display:none;">
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
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" action="{{route('admin/system/addroute')}}" method="post">
                    <div class="row"><div class="col-md-12"><h2>路由添加</h2></div></div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="路由路径..." name="path">
                                <input type="text" class="form-control" placeholder="路由名称..." name="name">
                                    <span class="input-group-btn">
                                        <input class="btn btn-default" type="submit" value="添加">
                                    </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="row"><div class="col-md-12"><h2>路由删除</h2></div></div>
                <div class="row">
                    <form class="form-horizontal" action="{{route('admin/system/delroute')}}" method="post">
                        <div class="col-md-4">
                            <select class="form-control" name="route_id">
                                @foreach($data['routelist'] as $route)
                                    <option value="{{$route['id']}}">{{$route['path']}} | {{$route['name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-danger" value="删除">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>路由路径</th>
                            <th>路由名称</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['routelist'] as $route)
                        <tr>
                            <td>{{$route['id']}}</td>
                            <td><div class="col-md-4"><input type="text" class="form-control" value="{{$route['path']}}"></div></td>
                            <td><div class="col-md-4"><input type="text" class="form-control" value="{{$route['name']}}"></div></td>
                            <td>
                                <span><button class="btn btn-xs btn-warning">修改</button></span>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="ssh" style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <h4>自主命令</h4>
                <form class="form-horizontal" action="{{route('admin/ssh/getCommand')}}" method="post">
                   <div class="col-md-6"><input type="text" class="form-control" name="input"></div>
                    <input type="submit" class="btn btn-warning"/>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>pull</h4>
                <form class="form-horizontal" action="{{route('admin/ssh/gitPull')}}" method="post">
                    <input type="submit" class="btn btn-warning"/>
                </form>
            </div>
        </div>
    </div>
@stop

@section('myscript')
    <script>
        $('#nav').bind('click', function(){
            $('#route').attr('class', '');
            $('#nav').attr('class', 'active');
            $('#ssh').attr('class', '');
            $('.route').css('display', 'none');
            $('.navigation').css('display', 'block');
            $('.ssh').css('display', '');
        });
        $('#route').bind('click', function(){
            $('#nav').attr('class', '');
            $('#route').attr('class', 'active');
            $('#ssh').attr('class', '');
            $('.navigation').css('display', 'none');
            $('.route').css('display', 'block');
            $('.ssh').css('display', '');
        });
        $('#ssh').bind('click', function(){
            $('#nav').attr('class', '');
            $('#route').attr('class', '');
            $('#ssh').attr('class', 'active');
            $('.navigation').css('display', 'none');
            $('.route').css('display', 'none');
            $('.ssh').css('display', 'block');
        });

        $('.btn.btn-xs.btn-warning').on('click', function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            var path = button.parent().parent().parent().children(":first").next().children(":first").children(":first").val();
            var name = button.parent().parent().parent().children(":first").next().next().children(":first").children(":first").val();
            $.ajax({
                url: "{{route('admin/system/editroute')}}",

                type: 'post',

                data:{"id":id, "path":path, "name":name},

                dataType: 'json',

                timeout: 10000,

                error: function(){alert('出现错误了...刷新一下试试!');},

                success: function(data){

                    if(data==200){
                        alert('ok');
                    }
                }
            });
        });
    </script>
@stop