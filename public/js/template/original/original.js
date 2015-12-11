/**
 * Created by redrock on 2015/2/16.
 */
require.config({
    baseUrl: "js/lib",
    shim: {
        underscore: {
            exports: "_"
        }
    },
    paths: {
        jquery: "jquery",
        port: "../template/original/port",
        go_top: "../widget/go_top/go_top",
        login_box: "../widget/login-register-case/login-register-case",
        ori_model: "../widget/ori_model/ori_model",
        underscore: "underscore",
        footer: "../widget/footer/footer"
    }
}), //加载依赖项
define([ "go_top", /* 'login_box', */ "ori_model", "underscore", "footer" ], function() {
    $(function() {});
});