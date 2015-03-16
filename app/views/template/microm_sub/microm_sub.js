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
        port : '../template/microm_sub/port',
        microm_play : '../widget/microm_play/microm_play',
        microm_comment : '../widget/microm_comment/microm_comment',
        go_top : '../widget/go_top/go_top',
        login_box : '../widget/login_box/login_box',
        microm_intro : '../widget/microm_intro/microm_intro'
    }
});

//加载依赖项
define(['microm_play','microm_comment','go_top', 'login_box', 'microm_intro'], function(){
    console.log('microm_sub init');
});