/**
 * Created by redrock on 2015/3/16.
 */
define([ "jquery", "ueditorConfig", "ueditorAll" ], function($) {
    $(function() {
        //注册ueditor文件夹目录
        var ue = UE.getEditor("container"), $form = $(".js-form_ueditor");
        $form.on("click", function(ev) {
            ev.preventDefault(), console.log(ue.getContent());
        });
    });
});