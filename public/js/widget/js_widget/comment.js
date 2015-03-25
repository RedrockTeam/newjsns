/**
 * Created by redrock on 2015/3/25.
 */
define([ "jquery" ], function($) {
    /*-------事件处理函数----*/
    function reply() {
        posPage();
    }
    //移动页面
    function posPage() {
        $("html, body").css({});
    }
    /*评论*/
    $(".js-reply_btn").on("click", reply);
});