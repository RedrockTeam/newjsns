@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li id="nav" class="active"><a href="#">导航管理</a></li>
        <li id="route" ><a href="#">路由管理</a></li>
    </ul>
@stop

@section('content')
    {{--导航管理--}}
    <div class="navigation">
        <div class="row">
            <div class="col-md-6">
               <div class="row"><div class="col-md-12"><h2>一级导航管理</h2></div></div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="一级导航名称...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">添加</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="row"><div class="col-md-12"><h2>二级导航管理</h2></div></div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="col-xs-4">
                            <select class="form-control ">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="二级导航名称...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">添加</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--路由管理--}}
    <div class="route" style="display:none;">
        <div class="row">
            <div class="col-md-6">
                <div class="row"><div class="col-md-12"><h2>路由添加</h2></div></div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="路由路径...">
                            <input type="text" class="form-control" placeholder="路由名称...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">添加</button>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row"><div class="col-md-12"><h2>路由删除</h2></div></div>
                <div class="row">
                    <div class="col-md-4">
                        <select class="form-control ">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger">删除</button>
                    </div>
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
                        <tr>
                            <td></td>
                            <td><div class="col-md-4"><input type="text" class="form-control" placeholder=""></div></td>
                            <td><div class="col-md-4"><input type="text" class="form-control" placeholder=""></div></td>
                            <td>
                                <span><button class="btn btn-xs btn-warning">修改</button></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('myscript')
    <script>
        $('#nav').bind('click', function(){
            $('#route').attr('class', '');
            $('#nav').attr('class', 'active');
            $('.route').css('display', 'none');
            $('.navigation').css('display', 'block');
        });
        $('#route').bind('click', function(){
            $('#nav').attr('class', '');
            $('#route').attr('class', 'active');
            $('.navigation').css('display', 'none');
            $('.route').css('display', 'block');
        });
    </script>
@stop