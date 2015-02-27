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
        @if($errors)
            @foreach ($errors->all() as $error)
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                            <strong>{{$error}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="row"><div class="col-md-12"><h1>读书影逝添加</h1></div></div>
        <form class="form-horizontal" method="post" action="{{route('admin/recommend/add')}}" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="标题" name="title" value="{{Input::old('title')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputFile">封面</label>
                    <input type="file" id="exampleInputFile" name="cover" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="作者" name="author" value="{{Input::old('author')}}">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select class="form-control" name="type_id">
                            @foreach($data['nav'] as $nav)
                                <option value="{{$nav['id']}}">{{$nav['type']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="row">
             <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="价格" name="price" value="{{Input::old('price')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="出版社" name="publish" value="{{Input::old('publish')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="原书标题(支持各个国家语言)" name="original_title" value="{{Input::old('original_title')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="译者" name="interpreter" value="{{Input::old('interpreter')}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="总页数" name="page_num" value="{{Input::old('page_num')}}">
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" id="exampleInputName2" placeholder="出版时间" name="time" value="{{Input::old('time')}}">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-4">
                <textarea class="form-control" rows="3" placeholder="简介" name="works_introduce">{{Input::old('works_introduce')}}</textarea>
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
                        @foreach($data['list'] as $v)
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
                <div class="row"><div class="col-md-12">{{$data['list']->links()}}</div></div>
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

        $('.btn.btn-xs.btn-danger').bind('click',function(){
            var button = $(this);
            var id = button.parent().parent().parent().children(":first").html();
            $.ajax({
                url: "{{route('admin/recommend/manage')}}",

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
                url: "{{route('admin/recommend/manage')}}",

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