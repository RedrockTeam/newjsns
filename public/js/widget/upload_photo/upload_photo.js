/**
 * Created by redrock on 2015/3/17.
 */
/*多图上传*/
define([ "jquery", "uploadify" ], function($) {
    $(function() {
        /*事件处理函数*/
        function check() {
            var $self = $(this);
            $(".js-photo_name")[0].disabled = $self[0].checked ? !0 : !1;
        }
        //uploadify插件配置
        $(".js-upload_photo").uploadify({
            swf: "public/complexPlugin/uploadify/uploadify.swf",
            uploader: "public/complexPlugin/uploadify/uploadify.php",
            cancelImg: "public/complexPlugin/uploadify/uploadify-cancel.png",
            multi: !0
        }), //检测是否多图上传
        $(".js-photo_form .js-check-isAblum").on("click", check);
    });
});