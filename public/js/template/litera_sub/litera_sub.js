require.config({baseUrl:"public/js/lib",shim:{underscore:{exports:"_"},bdshare:["share"]},paths:{jquery:"jquery",port:"../template/litera_sub/port",litera_content:"../widget/litera_content/litera_content",litera_comment:"../widget/litera_comment/litera_comment",go_top:"../widget/go_top/go_top",bdshare:"../widget/bdshare/bdshare",share:"../widget/bdshare/share",comment:"../widget/comment/comment",stop_copy:"../widget/js_widget/stopCopy",footer:"../widget/footer/footer"}}),define(["jquery","litera_content","litera_comment","go_top","share","bdshare","comment","stop_copy","footer"],function(a){a(function(){a(".js-open_login_box").on("click",function(){location.href="/login-register"})})});