require.config({baseUrl:"js/lib",shim:{underscore:{exports:"_"}},paths:{jquery:"jquery",port:"../template/micromovie/port",microm_list:"../widget/microm_list/microm_list",microm_topic:"../widget/microm_topic/microm_topic",go_top:"../widget/go_top/go_top",praise:"../widget/js_widget/praise",footer:"../widget/footer/footer"}}),define(["jquery","microm_list","go_top","praise","footer"],function(a){console.log("literatrue init"),a(function(){a(".js-open_login_box").on("click",function(){location.href="/login-register"})})});