/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'underscore' : {
            exports : '_'
        }
    },
    paths : {
        jquery : 'jquery',
        port : '../template/bookmovie/port',
        bookm_list : '../widget/bookm_list/bookm_list',
        go_top : '../widget/go_top/go_top'
    }
});
//加载依赖项
define(['bookm_list', 'go_top'], function(){
    console.log('boookmovie init');
});