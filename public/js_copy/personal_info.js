define(["jquery","port"],function(A){A(function(){function B(){A(".js-show_box").css("display","none"),A(".m-change_info .js-header_icon").attr("src",A(".m-show_info .js-header_icon").attr("src")),A(".m-change_info .js-user_name").attr("placeholder",A(".m-show_info .js-user_name").text()),A(".m-change_info .js-user_signatrue").text(A(".m-show_info .js-user_signatrue").text()),A(".js-change_box").css("display","block")}function C(D){D.preventDefault()}A(".js-open_change_info").on("click",B),A(".js-change_form").on("submit",C)})});