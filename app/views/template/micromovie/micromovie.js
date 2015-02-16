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
        port : '../template/micromovie/port',
        microm_list : '../widget/microm_list/microm_list',
        microm_topic : '../widget/microm_topic/microm_topic',
        go_top : '../widget/go_top/go_top',
        login_box : '../widget/login_box/login_box'
    }
});
//加载依赖项
define(['microm_list', 'go_top', 'login_box'], function(){
    console.log('literatrue init');
});
