/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl: "js/lib",
    shim: {
        slim_box: [ "jquery" ],
        waterfall: [ "jquery" ]
    },
    paths: {
        jquery: "jquery",
        port: "../template/photos/port",
        photos_list: "../widget/photos_list/photos_list",
        go_top: "../widget/go_top/go_top",
        load_img: "../widget/photos_list/load_img",
        underscore: "underscore",
        //login_box : '../widget/login-register-case/login-register-case',
        slim_box: "../widget/photos_list/slimBox",
        waterfall: "../widget/photos_list/jquery.waterfall",
        praise: "../widget/js_widget/praise",
        footer: "../widget/footer/footer"
    }
}), //加载依赖项
define([ "photos_list", "go_top", "load_img", /* 'login_box',*/ "praise", "footer" ], function() {
    console.log("photos init");
});