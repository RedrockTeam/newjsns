/**
 * Created by redrock on 2015/2/16.
 */
define([ "jquery" ], function() {
    /*
    *@desc 登陆框
    */
    $(function() {
        //阻止事件冒泡
        /*----------------------登陆提交处理 -------------------*/
        /*----------------------事件处理函数--------------------*/
        function openBox() {
            $(".js-login_box").css("display", "block");
        }
        function closeBox() {
            $(".js-login_box").css("display", "none");
        }
        function stopClose(ev) {
            ev.stopPropagation();
        }
        /*----------------------打开与关闭登陆框-----------------*/
        $(".js-open_login_box").on("click", openBox), //打开登陆框
        $(".js-close_login_box, .js-login_box").on("click", closeBox), //关闭登陆框
        $(".js-stop_click_close").on("click", stopClose);
    });
});