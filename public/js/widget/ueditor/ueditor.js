define(["jquery","ueditorConfig","ueditorAll"],function(B){B(function(){var D=UE.getEditor("container"),A=B(".js-form_ueditor");A.on("click",function(C){C.preventDefault(),console.log(D.getContent())})})});