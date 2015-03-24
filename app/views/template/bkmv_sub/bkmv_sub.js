/**
 * Created by redrock on 2015/2/14.
 */
//配置require.config
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'underscore' : {
            exports : '_'
        },
        bdshare : ['share']
    },
    paths : {
        jquery : 'jquery',
        port : '../template/bkmv_sub/port',
        bkmv_sub_comment : '../widget/bkmv_sub_comment/bkmv_sub_comment',
        go_top : '../widget/go_top/go_top',
        ueditorConfig : '../../complexPlugin/ueditor/ueditor.config',
        ueditorAll : '../../complexPlugin/ueditor/ueditor.all.min',
        ueditor : '../widget/ueditor/ueditor',
        bdshare : '../widget/bdshare/bdshare',
        share : '../widget/bdshare/share'
    }
});
//加载依赖项
define(['jquery' ,'bkmv_sub_comment', 'go_top', 'ueditor', 'share', 'bdshare'], function($){
    $(function(){
        $('.js-open_login_box').on('click', function(){
            location.href = '/login-register';
        });
    });
});
