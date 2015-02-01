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
        port: "../template/discuss/port",
        discuss_list: "../widget/discuss_list/discuss_list",
        go_top: "../widget/go_top/go_top"
    }
}), //加载依赖项
define([ "discuss_list", "go_top" ], function() {
    console.log("discuss init");
});