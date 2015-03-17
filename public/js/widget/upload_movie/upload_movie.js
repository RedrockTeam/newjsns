/**
 * Created by redrock on 2015/3/18.
 */
define([ "jquery", "uploadify" ], function($) {
    $(function() {
        //uploadify插件配置
        $(".js-upload_movie").uploadify({
            swf: "public/complexPlugin/uploadify/uploadify.swf",
            uploader: "public/complexPlugin/uploadify/uploadify.php",
            cancelImg: "public/complexPlugin/uploadify/uploadify-cancel.png",
            multi: !0
        });
    });
});