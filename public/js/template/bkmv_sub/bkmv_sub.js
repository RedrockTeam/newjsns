require.config({baseUrl:"js/lib",shim:{underscore:{exports:"_"},bdshare:["share"]},paths:{jquery:"jquery",port:"../template/bkmv_sub/port",bkmv_sub_comment:"../widget/bkmv_sub_comment/bkmv_sub_comment",go_top:"../widget/go_top/go_top",bdshare:"../widget/bdshare/bdshare",share:"../widget/bdshare/share",comment:"../widget/comment/comment",footer:"../widget/footer/footer"}}),define(["jquery","bkmv_sub_comment","go_top","share","bdshare","comment","footer"],function(a){a(function(){a(".js-open_login_box").on("click",function(){location.href="/login-register"})})});