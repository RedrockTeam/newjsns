/**
 * Created by redrock on 2015/3/14.
 */
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'underscore' : {
            exports : '_'
        }
    },
    paths : {
        jquery : 'jquery',
        port : '../template/book_tags/port',
        go_top : '../widget/go_top/go_top'
    }
});
//加载依赖项
define(['jquery', 'go_top'], function($){
    $(function(){
        $('.js-open_login_box').on('click', function(){
            location.href = '/login-register';
        });
    });
});