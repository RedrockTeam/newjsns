/**
 * Created by redrock on 2015/1/31.
 */
//配置require.config
require.config({
    baseUrl: "public/js/lib",
    paths: {
        jquery: "jquery",
        port: "../template/login-register/port",
        "login-register-case": "../widget/login-register-case/login-register-case"
    }
}), //加载依赖项
define([ "login-register-case" ], function() {
    //打开登陆框
    /*----------------------事件处理函数--------------------*/
    function openBox(ev) {
        $(".js-login_box").css("display", "block");
    }
    console.log("login-register init"), /*----------------------打开与关闭登陆框-----------------*/
    $(".js-open_login_box").on("click", openBox);
});