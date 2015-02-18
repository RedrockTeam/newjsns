/**
 * Created by redrock on 2015/2/16.
 */
require.config({
    baseUrl: "public/js/lib",
    shim: {
        underscore: {
            exports: "_"
        }
    },
    paths: {
        jquery: "jquery",
        port: "../template/literatrue/port",
        go_top: "../widget/go_top/go_top",
        login_box: "../widget/login_box/login_box"
    }
}), //加载依赖项
define([ "go_top", "login_box" ], function() {
    console.log("original init");
});