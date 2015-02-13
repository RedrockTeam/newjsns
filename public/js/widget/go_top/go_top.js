/**
 * @date Created by redrock on 2015/1/31.
 * @desc 返回顶部
 */
define([ "jquery" ], function($) {
    $(".js-go_top").on("click", function() {
        $("document,body").animate({
            scrollTop: 0
        });
    });
});