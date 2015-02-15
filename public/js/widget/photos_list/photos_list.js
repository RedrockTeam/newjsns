/**
 * Created by redrock on 2015/2/1.
 */
//爱拍列表
define([ "jquery", "underscore" ], function($) {
    $(function() {
        function loadImg() {}
        $(".js-outer_photo"), $(".js-load");
        $.ajax({
            url: "/get_photos",
            method: "GET",
            success: function(res) {
                res.success && loadImg(res.output);
            }
        });
    });
});