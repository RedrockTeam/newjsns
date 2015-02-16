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
        port: "../template/personal/port",
        personal_tabs: "../widget/personal_tabs/personal_tabs",
        go_top: "../widget/go_top/go_top"
    }
}), //加载依赖项
define([ "personal_tabs", "go_top" ], function() {
    console.log("literatrue init");
});