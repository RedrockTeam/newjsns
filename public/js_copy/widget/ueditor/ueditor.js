define(["jquery","ueditorConfig","ueditorAll"],function(A){A(function(){var C=UE.getEditor("container"),B=A(".js-form_ueditor");B.on("click",function(D){D.preventDefault(),console.log(C.getContent())})})});