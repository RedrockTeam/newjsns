/**
 * @date Created by redrock on 2015/1/31.
 * @desc 返回顶部
 */
define([ "jquery" ], function($) {
    //滚向顶部
    /*-------------------------------事件处理函数-------------------------*/
    function goTop() {
        $("html, body").animate({
            scrollTop: 0
        });
    }
    /*------------------------------滚动事件处理-------------------------*/
    $(".js-go_top").on("click", goTop);
});