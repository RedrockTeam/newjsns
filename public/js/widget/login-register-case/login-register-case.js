define(["jquery","port"],function(B,A){B(function(){function C(F,G){F.on("click",function(){var H=B(this);H.hasClass("s-active")||(B(".u-tabs li").removeClass("s-active"),B(".u-register,.u-login").css("display","none"),H.addClass("s-active"),G.css("display","block"))})}function D(H){var G=B(this),F={stu_id:/^[\d]{7}$/gi,stu_pwd:/^[\w]{6,20}$/g,stu_nickname:/^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[\w])+$/gi};E.call(G,F)||H.preventDefault()}function E(G){var H=B(this),F=!0,I=B(".js-check",H);return I.each(function(K,M){var L=B(M),J=L.attr("data-check_type");G[J]&&"[object RegExp]"==Object.prototype.toString.call(G[J])&&(G[J].test(L.val())?L.next(".s-error").css("display","none"):(L.next(".s-error").css("display","block"),F=!1))}),console.log(F),F}B(".m-login-register-case").on("click",function(F){F.stopPropagation()}),C(B(".js-open-register"),B(".u-register")),C(B(".js-open-login"),B(".u-login")),B(".js-login-form, .js-register-form").on("submit",D)})});