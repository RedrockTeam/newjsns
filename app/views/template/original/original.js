/**
 * Created by redrock on 2015/2/16.
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
        port : '../template/original/port',
        go_top : '../widget/go_top/go_top',
        login_box : '../widget/login-register-case/login-register-case',
        ori_model : '../widget/ori_model/ori_model',
        underscore : 'underscore',
        footer : '../widget/footer/footer'
    }
});
//加载依赖项
define(['go_top',/* 'login_box', */'ori_model', 'underscore', 'footer'], function(){
    $(function(){
        /*----------------------打开与关闭登陆框-----------------*/
        /*$('.js-open_login_box').on('click', openBox);                //打开登陆框
        $('.js-close_login_box, .js-login_box').on('click', closeBox);//关闭登陆框
        *//*----------------------事件处理函数--------------------*//*
        function openBox(ev){
            ev.preventDefault();
            $('.js-login_box').css('display', 'block');
        }

        function closeBox(){
            $('.js-login_box').css('display', 'none');
        }*/
    });
});