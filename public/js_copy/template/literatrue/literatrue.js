/**
 * Created by redrock on 2015/1/31.
 */
//配置require.config
require.config({
    baseUrl: "public/js/lib",
    shim: {
        underscore: {
            exports: "_"
        },
        "jquery.sliderBox": [ "jquery" ]
    },
    paths: {
        jquery: "jquery",
        port: "../template/literatrue/port",
        litera_list: "../widget/litera_list/litera_list",
        go_top: "../widget/go_top/go_top",
        "jquery.sliderBox": "./jquery.sliderBox",
        slider: "../widget/litera_recom_slider/litera_recom_slider",
        praise: "../widget/js_widget/praise",
        //收藏
        stop_copy: "../widget/js_widget/stopCopy",
        footer: "../widget/footer/footer"
    }
}), //加载依赖项
define([ "jquery", "litera_list", "go_top", "slider", "praise", "stop_copy", "footer" ], function($) {
    $(function() {
        $(".js-open_login_box").on("click", function() {
            location.href = "/login-register";
        });
    });
});