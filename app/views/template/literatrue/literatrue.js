/**
 * Created by redrock on 2015/1/31.
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
        port : '../template/literatrue/port',
        litera_list : '../widget/litera_list/litera_list',
        go_top : '../widget/go_top/go_top'
    }
});

//加载依赖项
define(['litera_list', 'go_top'], function(){
    console.log('literatrue init');
});