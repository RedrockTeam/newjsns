require.config({baseUrl:"public/js/lib",shim:{underscore:{exports:"_"},imgSelectPlugin:["jquery"]},paths:{jquery:"jquery",port:"../template/personal/port",personal_tabs:"../widget/personal_tabs/personal_tabs",go_top:"../widget/go_top/go_top",personal_tabs:"../widget/personal_tabs/personal_tabs",personal_info:"../widget/personal_info/personal_info",imgSelectPlugin:"jquery.imgareaselect.min",imageSelect:"../widget/imageSelect/imageSelect"}}),define(["jquery","go_top","personal_info","imageSelect","personal_tabs"],function(a){a(function(){a(".js-open_login_box").on("click",function(){location.href="/login-register"})})});