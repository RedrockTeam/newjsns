/**
 * Created by redrock on 2015/2/14.
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
        port: "../template/bkmv_sub/port",
        bkmv_sub_comment: "../widget/bkmv_sub_comment/bkmv_sub_comment)",
        go_top: "../widget/go_top/go_top",
        login_box: "../widget/login_box/login_box"
    }
}), //加载依赖项
define([ "bkmv_sub_comment", "go_top", "login_box" ], function() {
    console.log("bkmv_sub init");
});