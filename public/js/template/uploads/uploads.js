require.config({baseUrl:"../public/js/lib",shim:{uploadify:["jquery"],bootstrap:["jquery"]},paths:{jquery:"jquery",port:"../template/uploads/port",uploadify:"../../complexPlugin/uploadify/jquery.uploadify",upload_photo:"../widget/upload_photo/upload_photo",upload_movie:"../widget/upload_movie/upload_movie",webuploader:"../../complexPlugin/webuploader/dist/webuploader.flashonly",bootstrap:"http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap",summernote:"summernote.min",upload_passage:"../widget/upload_passage/upload_passage"}}),define(["jquery","upload_photo","upload_passage","bootstrap","summernote"],function(A){A(function(){function C(G,F){G.preventDefault();A(this);for(var E in D){A("."+E).removeClass("active"),D[E].css("display","none")}A("."+F).addClass("active"),D[F].css("display","block")}var D={"js-photo":A(".js-form_photo"),"js-passage":A(".js-form_passage"),"js-movie":A(".js-form_movie")};for(var B in D){!function(E){A("."+E).on("click",function(F){C.call(this,F,E)})}(B)}A("#editor").summernote()})});