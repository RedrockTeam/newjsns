//配置require.js
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'underscore' : {
            exports : '_'
        }
    },
    paths : {
        jquery : "jquery",
        port : "../template/home/port",
        square : "../widget/square"
    }
});

//加载项目依赖项
define(["square/square"], function(){
    console.log('home init');
});
