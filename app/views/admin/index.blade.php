@extends("admin.template")

{{--二级导航--}}
@section('s_nav')
    <ul class="nav nav-sidebar text-center nav-pills nav-stacked">
        <li class="active"><a href="">仪表盘</a></li>
    </ul>
@stop

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">操作系统</h3>
            </div>
            <div class="panel-body">
                <p>{{php_uname();}}</p>
            </div>
        </div>
    </div><div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">服务器/PHP</h3>
            </div>
            <div class="panel-body">
                <p>{{apache_get_version()}}</p>
            </div>
        </div>
    </div><div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">MySQL</h3>
            </div>
            <div class="panel-body">
                <p>{{mysql_get_client_info()}}</p>
            </div>
        </div>
    </div>
</div>
    <div class="row"><div class="well text-center">本网站由红岩网校工作站负责开发, 管理, 不经红岩网校委员会书面同意, 不得进行转载</div></div>
@stop