define(["jquery"],function(A){A(function(){A(".js-ori_type").on("change",function(){17==this.value?(A(".js-type_work label").text("请上传作品"),A(".js-type_link").hide()):(A(".js-type_work label").text("请上传封面"),A(".js-type_link").show())})})});