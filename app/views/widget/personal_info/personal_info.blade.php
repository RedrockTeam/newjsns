<div class="m-personal_info">
    <div class="js-change_status">
        @if($errors)
            @foreach ($errors->all() as $error)
                <div class="row js-change_info">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{$error}}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="m-show_info js-show_box">
        <span href="" class="u-change_info_btn js-open_change_info">@if(Session::get('uid') == $data['user_info']['id'])修改信息@else @endif</span>
        <div class="m-info_detail">
            <img src="{{$data['user_info']['head']}}" alt="" class="u-user_show_icon js-header_icon"/>
            <h5 class="js-user_name">{{$data['user_info']['username']}}</h5>
             <p class="u-user_extra_info">
                <span>E-mail:</span><span>{{$data['user_info']['email']}}</span>
             </p>
            <h6 class="js-user_signatrue">{{$data['user_info']['introduce']}}</h6>
        </div>
    </div>
    <div class="m-change_info js-change_box">
        <form action="{{route('home/personal/personalinfo')}}" class="f-cb js-change_form">
            <div class="u-change_header_icon f-cb">
                <img src="" alt="" class="u-show_icon f-fl js-header_icon" />
                <div class="f-fl upload" >
                    <label for="upload_icon" class="f-fl">
                        支持JGP、PNG、BMP格式
                    </label>
                    <input type="button" class="js-link_upload" id="upload_icon" name="upload_icon" value="上传头像"/>
                </div>
            </div>
        </form>
        <form action="{{route('home/personal/personalinfo')}}" class="f-cb js-change_form" method="post">
            <div class="u-change_user_name s-input">
                <label for="change-user_name">修改昵称</label>
                <input type="text" name="username" id="change-user_name" value="{{$data['user_info']['username']}}" class="js-user_name"/>
            </div>
            <div class="u-change_user_name s-input">
                            <label for="change-user_name">修改邮箱</label>
                            <input type="text" name="email" id="change-user_eamil" value="{{$data['user_info']['email']}}" class="js-user_email"/>
             </div>
            <div class="u-chnage_user_signatrue s-input">
                <label for="change-user_signatrue">个性签名</label>
                <textarea type="text" id="change-user_signatrue" class="js-user_signatrue" value="{{$data['user_info']['introduce']}}"  name="signatrue"></textarea>
            </div>
            <input type="submit" value="保存" class="f-fr"/>
        </form>
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_info/personal_info.css")}}
@stop