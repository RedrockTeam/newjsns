/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'slim_box' : ['jquery'],
        'waterfall' : ['jquery']
    },
    paths : {
        jquery : 'jquery',
        port : '../template/photos/port',
        photos_list : '../widget/photos_list/photos_list',
        go_top : '../widget/go_top/go_top',
        load_img : '../widget/photos_list/load_img',
        underscore : 'underscore',
        login_box : '../widget/login_box/login_box',
        slim_box : '../widget/photos_list/slimBox',
        waterfall : '../widget/photos_list/jquery.waterfall'
    }
});
//加载依赖项
define(['photos_list', 'go_top', 'load_img', 'login_box'], function(){
    console.log('photos init');
});