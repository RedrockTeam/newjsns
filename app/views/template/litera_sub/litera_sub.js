/**
 * Created by redrock on 2015/1/31.
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
        port : '../template/litera_sub/port',
        litera_content : '../widget/litera_content/litera_content',
        litera_comment : '../widget/litera_comment/litera_comment',
        go_top : '../widget/go_top/go_top',
        login_box : '../widget/login_box/login_box'
    }
});
//加载依赖项
define(['litera_content','litera_comment','go_top', 'login_box'], function(){
    console.log('literatrue init');
});