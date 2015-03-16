/**
 * Created by redrock on 2015/1/31.
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
        port: "../template/litera_sub/port",
        litera_content: "../widget/litera_content/litera_content",
        litera_comment: "../widget/litera_comment/litera_comment",
        go_top: "../widget/go_top/go_top",
        ueditorConfig: "../../complexPlugin/ueditor/ueditor.config",
        ueditorAll: "../../complexPlugin/ueditor/ueditor.all.min",
        ueditor: "../widget/ueditor/ueditor"
    }
}), //加载依赖项
define([ "jquery", "litera_content", "litera_comment", "go_top", "ueditor" ], function($) {
    $(function() {
        $(".js-open_login_box").on("click", function() {
            location.href = "/login-register";
        });
    });
});