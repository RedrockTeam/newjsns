/**
 * Created by redrock on 2015/3/15.
 */
//配置require.js
require.config({
    baseUrl: "public/js/lib",
    shim: {
        underscore: {
            exports: "_"
        },
        imageSelect: [ "jqueryPack" ]
    },
    paths: {
        jquery: "jquery",
        jqueryPack: "jquery-pack",
        port: "../template/home/port",
        imageForm: "../widget/imageForm/imageForm",
        imageSelect: "jquery.imgareaselect.min"
    }
}), //加载项目依赖项
define([ "imageForm" ], function() {
    console.log("home init");
});