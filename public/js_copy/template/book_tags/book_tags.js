require.config({baseUrl:"public/js/lib",shim:{underscore:{exports:"_"}},paths:{jquery:"jquery",port:"../template/book_tags/port",go_top:"../widget/go_top/go_top"}}),define(["jquery","go_top"],function(A){A(function(){A(".js-open_login_box").on("click",function(){location.href="/login-register"})})});