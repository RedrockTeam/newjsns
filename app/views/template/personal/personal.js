/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        underscore : {
            exports : '_'
        },
        imgSelectPlugin : ['jquery']
    },
    paths : {
        jquery : 'jquery',
        port : '../template/personal/port',
        personal_tabs: '../widget/personal_tabs/personal_tabs',
        go_top : '../widget/go_top/go_top',
        personal_info : '../widget/personal_info/personal_info',
        imgSelectPlugin : 'jquery.imgareaselect.min',
        imageSelect : '../widget/imageSelect/imageSelect'
    }
});
//加载依赖项
define(['jquery', 'go_top', 'personal_info', 'imageSelect'], function($){
    $(function(){
        $('.js-open_login_box').on('click', function(){
            location.href = '/login-register';
        });
    });
});