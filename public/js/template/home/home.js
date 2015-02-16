//配置require.js
require.config({
    baseUrl: "public/js/lib",
    shim: {
        underscore: {
            exports: "_"
        }
    },
    paths: {
        jquery: "jquery",
        port: "../template/home/port",
        square: "../widget/square",
        login_box: "../widget/login_box/login_box"
    }
}), //加载项目依赖项
define([ "square/square", "login_box" ], function() {
    console.log("home init");
});