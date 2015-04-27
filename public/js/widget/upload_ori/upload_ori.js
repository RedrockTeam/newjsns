/**
 * Created by redrock on 2015/4/22.
 */
define([ "jquery" ], function($) {
    $(function() {
        $(".js-ori_type").on("change", function() {
            17 == this.value ? ($(".js-type_work label").text("请上传作品"), $(".js-type_link").hide()) : ($(".js-type_work label").text("请上传封面"), 
            $(".js-type_link").show());
        });
    });
});