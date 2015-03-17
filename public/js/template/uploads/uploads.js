/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl: "public/js/lib",
    shim: {
        uploadify: [ "jquery" ]
    },
    paths: {
        jquery: "jquery",
        port: "../template/uploads/port",
        uploadify: "../../complexPlugin/uploadify/jquery.uploadify.min",
        upload_photo: "../widget/upload_photo/upload_photo"
    }
}), //加载依赖项
define([ "upload_photo" ], function() {
    console.log("uploadify is filished");
});