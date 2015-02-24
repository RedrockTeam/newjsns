
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
                                        <span><button class="btn btn-xs btn-success">冻结</button></span>
                                        <span><button class="btn btn-xs btn-danger">恢复</button></span>
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
                    <form class="navbar-form" role="search">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                选择搜索类型
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">按文章名搜索</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">按文章ID搜索</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">按昵称搜索</a></li>
                            </ul>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </div>
            </div>
@stop