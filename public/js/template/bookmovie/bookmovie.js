/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl: "public/js/lib",
    shim: {
        underscore: {
            exports: "_"
        }
    },
    paths: {
        jquery: "jquery",
        port: "../template/bookmovie/port",
        bookm_list: "../widget/bookm_list/bookm_list",
        go_top: "../widget/go_top/go_top",
        praise: "../widget/js_widget/praise"
    }
}), //加载依赖项
define([ "jquery", "bookm_list", "go_top", "praise" ], function($) {
    $(function() {
        $(".js-open_login_box").on("click", function() {
            location.href = "/login-register";
        });
    });
});