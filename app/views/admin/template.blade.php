<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>锦瑟南山后台管理</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container-fluid">
    {{--header--}}
    <div class="row">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{route('admin/index')}}">锦瑟南山后台管理</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li {{Route::currentRouteName()=='admin/literature'?'class="active"':'';}}><a href="{{route('admin/literature')}}">文学模块管理<span class="sr-only">(current)</span></a></li>
                            <li {{Route::currentRouteName()=='admin/photos'?'class="active"':'';}}><a href="{{route('admin/photos')}}">爱拍模块管理</a></li>
                            <li {{Route::currentRouteName()=='admin/micromovie'?'class="active"':'';}}><a href="{{route('admin/micromovie')}}">微视模块管理</a></li>
                            <li {{Route::currentRouteName()=='admin/recommend'?'class="active"':'';}}><a href="{{route('admin/recommend')}}">读书影逝模块管理</a></li>
                            <li {{Route::currentRouteName()=='admin/original'?'class="active"':'';}}><a href="{{route('admin/original')}}">原味模块管理</a></li>
                            <li {{Route::currentRouteName()=='admin/comment'?'class="active"':'';}}><a href="{{route('admin/comment')}}">评论模块管理</a></li>
                            <li {{Route::currentRouteName()=='admin/user'?'class="active"':'';}}><a href="{{route('admin/user')}}">用户管理</a></li>
                            <li {{Route::currentRouteName()=='admin/system'?'class="active"':'';}}><a href="{{route('admin/system')}}">系统管理</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">用户名</a></li>
                            <li><a href="#">注销</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

    </div>
    {{--main--}}
        <div class="row">
            {{--二级导航--}}
            <div class="col-md-2 sidebar">@yield('s_nav')</div>
            {{--内容--}}
            <div class="col-md-10 main">@yield('content')</div>
        </div>
    {{--footer--}}
    <div class="row">
    <nav class="navbar-fixed-bottom text-center">
        <div class="row"><div class="col-md-12"><h4>© 2015 本网站由 <a href="http://getbootstrap.com/">Bootstrap</a> 和 <a href="http://laravel.com/">Laravel</a> 驱动, 遵循 <a href="https://github.com/RedrockTeam/newjsns/blob/master/LICENSE">MIT</a> 开源协议</h4></div></div>
    </nav>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>