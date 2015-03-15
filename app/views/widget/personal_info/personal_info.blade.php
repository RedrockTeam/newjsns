<div class="m-personal_info">
    <div class="m-show_info js-show_box">
        <span href="" class="u-change_info_btn js-open_change_info">修改信息</span>
        <div class="m-info_detail">
            <img src="{{$data['user_info']['head']}}" alt="" class="u-user_show_icon js-header_icon"/>
            <h5 class="js-user_name">{{$data['user_info']['head']}}</h5>
            <h6 class="js-user_signatrue">{{$data['user_info']['introduce']}}</h6>
            <ul class="u-user_extra_info">
                <li><span>E-mail:</span><span>{{$data['user_info']['email']}}</span></li>
            </ul>
        </div>
    </div>
    <div class="m-change_info js-change_box">
        <form action="" class="f-cb js-change_form">
            <div class="u-change_header_icon f-cb">
                <img src="" alt="" class="u-show_icon f-fl js-header_icon" />
                <div class="f-fl upload" >
                    <label for="upload_icon" class="f-fl">
                        支持JGP、PNG、BMP格式
                    </label>
                    <input type="button" class="js-link_upload" id="upload_icon" name="upload_icon" value="上传头像"/>
                </div>
            </div>
            <div class="u-change_user_name s-input">
                <label for="change-user_name">修改昵称</label>
                <input type="text" name="change-user_name" id="change-user_name" placeholder="" class="js-user_name"/>
            </div>
            <div class="u-chnage_user_signatrue s-input">
                <label for="change-user_signatrue">个性签名</label>
                <textarea type="text" id="change-user_signatrue" class="js-user_signatrue"  name="change-user_signatrue"></textarea>
            </div>
            <input type="submit" value="保存" class="f-fr"/>
        </form>
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_info/personal_info.css")}}
@stop