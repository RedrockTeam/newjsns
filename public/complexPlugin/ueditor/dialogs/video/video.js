(function(){var F={},K=[],E=false,I;window.onload=function(){$focus($G("videoUrl"));O();M();H()};function O(){var W=$G("tabHeads").children;for(var V=0;V<W.length;V++){domUtils.on(W[V],"click",function(X){var a,Y,Z=X.target||X.srcElement;for(a=0;a<W.length;a++){Y=W[a].getAttribute("data-content-id");if(W[a]==Z){domUtils.addClass(W[a],"focus");domUtils.addClass($G(Y),"focus")}else{domUtils.removeClasses(W[a],"focus");domUtils.removeClasses($G(Y),"focus")}}})}}function M(){S(["videoFloat","upload_alignment"]);U($G("videoUrl"));L();(function(){var Z=editor.selection.getRange().getClosedNode(),V;if(Z&&Z.className){var X=(Z.className=="edui-faked-video"),a=Z.className.indexOf("edui-upload-video")!=-1;if(X||a){$G("videoUrl").value=V=Z.getAttribute("_url");$G("videoWidth").value=Z.width;$G("videoHeight").value=Z.height;var W=domUtils.getComputedStyle(Z,"float"),Y=domUtils.getComputedStyle(Z.parentNode,"text-align");P(Y==="center"?"center":W)}if(a){E=true}}J(V)})()}function L(){dialog.onok=function(){$G("preview").innerHTML="";var V=D("tabHeads","tabSrc");switch(V){case"video":return G();break;case"videoSearch":return N("searchList");break;case"upload":return Q();break}};dialog.oncancel=function(){$G("preview").innerHTML=""}}function P(X){var V=$G("videoFloat").children;for(var W=0,Y;Y=V[W++];){if(Y.getAttribute("name")==X){if(Y.className!="focus"){Y.className="focus"}}else{if(Y.className=="focus"){Y.className=""}}}}function G(){var Y=$G("videoWidth"),V=$G("videoHeight"),W=$G("videoUrl").value,X=D("videoFloat","name");if(!W){return false}if(!R([Y,V])){return false}editor.execCommand("insertvideo",{url:B(W),width:Y.value,height:V.value,align:X},E?"upload":null)}function N(Z){var X=domUtils.getElementsByTagName($G(Z),"img"),V=[];for(var W=0,Y;Y=X[W++];){if(Y.getAttribute("selected")){V.push({url:Y.getAttribute("ue_video_url"),width:420,height:280,align:"none"})}}editor.execCommand("insertvideo",V)}function D(a,Y){var X=$G(a).children,Z;for(var V=0,W;W=X[V++];){if(W.className=="focus"){Z=W.getAttribute(Y);break}}return Z}function B(V){if(!V){return""}V=utils.trim(V).replace(/v\.youku\.com\/v_show\/id_([\w\-=]+)\.html/i,"player.youku.com/player.php/sid/$1/v.swf").replace(/(www\.)?youtube\.com\/watch\?v=([\w\-]+)/i,"www.youtube.com/v/$2").replace(/youtu.be\/(\w+)$/i,"www.youtube.com/v/$1").replace(/v\.ku6\.com\/.+\/([\w\.]+)\.html.*$/i,"player.ku6.com/refer/$1/v.swf").replace(/www\.56\.com\/u\d+\/v_([\w\-]+)\.html/i,"player.56.com/v_$1.swf").replace(/www.56.com\/w\d+\/play_album\-aid\-\d+_vid\-([^.]+)\.html/i,"player.56.com/v_$1.swf").replace(/v\.pps\.tv\/play_([\w]+)\.html.*$/i,"player.pps.tv/player/sid/$1/v.swf").replace(/www\.letv\.com\/ptv\/vplay\/([\d]+)\.html.*$/i,"i7.imgs.letv.com/player/swfPlayer.swf?id=$1&autoplay=0").replace(/www\.tudou\.com\/programs\/view\/([\w\-]+)\/?/i,"www.tudou.com/v/$1").replace(/v\.qq\.com\/cover\/[\w]+\/[\w]+\/([\w]+)\.html/i,"static.video.qq.com/TPout.swf?vid=$1").replace(/v\.qq\.com\/.+[\?\&]vid=([^&]+).*$/i,"static.video.qq.com/TPout.swf?vid=$1").replace(/my\.tv\.sohu\.com\/[\w]+\/[\d]+\/([\d]+)\.shtml.*$/i,"share.vrs.sohu.com/my/v.swf&id=$1");return V}function R(W){for(var V=0,Y;Y=W[V++];){var X=Y.value;if(!C(X)&&X){alert(lang.numError);Y.value="";Y.focus();return false}}return true}function C(V){return/(0|^[1-9]\d*$)/.test(V)}function S(Z){for(var V=0,b;b=Z[V++];){var W=$G(b),Y={"none":lang["default"],"left":lang.floatLeft,"right":lang.floatRight,"center":lang.block};for(var a in Y){var X=document.createElement("div");X.setAttribute("name",a);if(a=="none"){X.className="focus"}X.style.cssText="background:url(images/"+a+"_focus.jpg);";X.setAttribute("title",Y[a]);W.appendChild(X)}A(b)}}function A(X){var Y=$G(X).children;for(var V=0,W;W=Y[V++];){domUtils.on(W,"click",function(){for(var a=0,Z;Z=Y[a++];){Z.className="";Z.removeAttribute&&Z.removeAttribute("class")}this.className="focus"})}}function U(V){if(browser.ie){V.onpropertychange=function(){J(this.value)}}else{V.addEventListener("input",function(){J(this.value)},false)}}function J(V){if(!V){return}var W=B(V);$G("preview").innerHTML='<div class="previewMsg"><span>'+lang.urlError+'</span></div><embed class="previewVideo" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="'+W+'" width="'+420+'" height="'+280+'" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true" ></embed>'}function Q(){var b=[],W=editor.getOpt("videoUrlPrefix"),a=$G("upload_width").value||420,V=$G("upload_height").value||280,Y=D("upload_alignment","name")||"none";for(var X in K){var Z=K[X];b.push({url:W+Z.url,width:a,height:V,align:Y})}var c=I.getQueueCount();if(c){$(".info","#queueList").html('<span style="color:red;">'+"还有2个未上传文件".replace(/[\d]/,c)+"</span>");return false}else{editor.execCommand("insertvideo",b,"upload")}}function H(){I=new T("queueList")}function T(V){this.$wrap=V.constructor==String?$("#"+V):$(V);this.init()}T.prototype={init:function(){this.fileList=[];this.initContainer();this.initUploader()},initContainer:function(){this.$queue=this.$wrap.find(".filelist")},initUploader:function(){var q=this,r=jQuery,v=q.$wrap,b=v.find(".filelist"),l=v.find(".statusBar"),X=l.find(".info"),n=v.find(".uploadBtn"),t=v.find(".filePickerBtn"),g=v.find(".filePickerBlock"),d=v.find(".placeholder"),i=l.find(".progress").hide(),k=0,o=0,m=window.devicePixelRatio||1,e=113*m,s=113*m,c="",a={},Y=(function(){var y=document.createElement("p").style,x="transition" in y||"WebkitTransition" in y||"MozTransition" in y||"msTransition" in y||"OTransition" in y;y=null;return x})(),h,w=editor.getActionUrl(editor.getOpt("videoActionName")),p=editor.getOpt("videoMaxSize"),W=(editor.getOpt("videoAllowFiles")||[]).join("").replace(/\./g,",").replace(/^[,]/,"");if(!WebUploader.Uploader.support()){r("#filePickerReady").after(r("<div>").html(lang.errorNotSupport)).hide();return}else{if(!editor.getOpt("videoActionName")){r("#filePickerReady").after(r("<div>").html(lang.errorLoadConfig)).hide();return}}h=q.uploader=WebUploader.create({pick:{id:"#filePickerReady",label:lang.uploadSelectFile},swf:"../../third-party/webuploader/Uploader.swf",server:w,fileVal:editor.getOpt("videoFieldName"),duplicate:true,fileSingleSizeLimit:p,compress:false});h.addButton({id:"#filePickerBlock"});h.addButton({id:"#filePickerBtn",label:lang.uploadAddFile});Z("pedding");function f(Ac){var Ad=r('<li id="'+Ac.id+'"><p class="title">'+Ac.name+'</p><p class="imgWrap"></p><p class="progress"><span></span></p></li>'),x=r('<div class="file-panel"><span class="cancel">'+lang.uploadDelete+'</span><span class="rotateRight">'+lang.uploadTurnRight+'</span><span class="rotateLeft">'+lang.uploadTurnLeft+"</span></div>").appendTo(Ad),z=Ad.find("p.progress span"),y=Ad.find("p.imgWrap"),Ab=r('<p class="error"></p>').hide().appendTo(Ad),Aa=function(Ae){switch(Ae){case"exceed_size":text=lang.errorExceedSize;break;case"interrupt":text=lang.errorInterrupt;break;case"http":text=lang.errorHttp;break;case"not_allow_type":text=lang.errorFileType;break;default:text=lang.errorUploadRetry;break}Ab.text(text).show()};if(Ac.getStatus()==="invalid"){Aa(Ac.statusText)}else{y.text(lang.uploadPreview);if("|png|jpg|jpeg|bmp|gif|".indexOf("|"+Ac.ext.toLowerCase()+"|")==-1){y.empty().addClass("notimage").append('<i class="file-preview file-type-'+Ac.ext.toLowerCase()+'"></i><span class="file-title">'+Ac.name+"</span>")}else{if(browser.ie&&browser.version<=7){y.text(lang.uploadNoPreview)}else{h.makeThumb(Ac,function(Ag,Ae){if(Ag||!Ae||(/^data:/.test(Ae)&&browser.ie&&browser.version<=7)){y.text(lang.uploadNoPreview)}else{var Af=r('<img src="'+Ae+'">');y.empty().append(Af);Af.on("error",function(){y.text(lang.uploadNoPreview)})}},e,s)}}a[Ac.id]=[Ac.size,0];Ac.rotation=0;if(!Ac.ext||W.indexOf(Ac.ext.toLowerCase())==-1){Aa("not_allow_type");h.removeFile(Ac)}}Ac.on("statuschange",function(Ae,Af){if(Af==="progress"){z.hide().width(0)}else{if(Af==="queued"){Ad.off("mouseenter mouseleave");x.remove()}}if(Ae==="error"||Ae==="invalid"){Aa(Ac.statusText);a[Ac.id][1]=1}else{if(Ae==="interrupt"){Aa("interrupt")}else{if(Ae==="queued"){a[Ac.id][1]=0}else{if(Ae==="progress"){Ab.hide();z.css("display","block")}else{if(Ae==="complete"){}}}}}Ad.removeClass("state-"+Af).addClass("state-"+Ae)});Ad.on("mouseenter",function(){x.stop().animate({height:30})});Ad.on("mouseleave",function(){x.stop().animate({height:0})});x.on("click","span",function(){var Ae=r(this).index(),Af;switch(Ae){case 0:h.removeFile(Ac);return;case 1:Ac.rotation+=90;break;case 2:Ac.rotation-=90;break}if(Y){Af="rotate("+Ac.rotation+"deg)";y.css({"-webkit-transform":Af,"-mos-transform":Af,"-o-transform":Af,"transform":Af})}else{y.css("filter","progid:DXImageTransform.Microsoft.BasicImage(rotation="+(~~((Ac.rotation/90)%4+4)%4)+")")}});Ad.insertBefore(g)}function u(x){var y=r("#"+x.id);delete a[x.id];j();y.off().find(".file-panel").off().end().remove()}function j(){var Aa=0,y=0,z=i.children(),x;r.each(a,function(Ac,Ab){y+=Ab[0];Aa+=Ab[0]*Ab[1]});x=y?Aa/y:0;z.eq(0).text(Math.round(x*100)+"%");z.eq(1).css("width",Math.round(x*100)+"%");V()}function Z(z,y){if(z!=c){var x=h.getStats();n.removeClass("state-"+c);n.addClass("state-"+z);switch(z){case"pedding":b.addClass("element-invisible");l.addClass("element-invisible");d.removeClass("element-invisible");i.hide();X.hide();h.refresh();break;case"ready":d.addClass("element-invisible");b.removeClass("element-invisible");l.removeClass("element-invisible");i.hide();X.show();n.text(lang.uploadStart);h.refresh();break;case"uploading":i.show();X.hide();n.text(lang.uploadPause);break;case"paused":i.show();X.hide();n.text(lang.uploadContinue);break;case"confirm":i.show();X.hide();n.text(lang.uploadStart);x=h.getStats();if(x.successNum&&!x.uploadFailNum){Z("finish");return}break;case"finish":i.hide();X.show();if(x.uploadFailNum){n.text(lang.uploadRetry)}else{n.text(lang.uploadStart)}break}c=z;V()}if(!q.getQueueCount()){n.addClass("disabled")}else{n.removeClass("disabled")}}function V(){var y="",x;if(c==="ready"){y=lang.updateStatusReady.replace("_",k).replace("_KB",WebUploader.formatSize(o))}else{if(c==="confirm"){x=h.getStats();if(x.uploadFailNum){y=lang.updateStatusConfirm.replace("_",x.successNum).replace("_",x.successNum)}}else{x=h.getStats();y=lang.updateStatusFinish.replace("_",k).replace("_KB",WebUploader.formatSize(o)).replace("_",x.successNum);if(x.uploadFailNum){y+=lang.updateStatusError.replace("_",x.uploadFailNum)}}}X.html(y)}h.on("fileQueued",function(x){k++;o+=x.size;if(k===1){d.addClass("element-invisible");l.show()}f(x)});h.on("fileDequeued",function(x){k--;o-=x.size;u(x);j()});h.on("filesQueued",function(x){if(!h.isInProgress()&&(c=="pedding"||c=="finish"||c=="confirm"||c=="ready")){Z("ready")}j()});h.on("all",function(x,z){switch(x){case"uploadFinished":Z("confirm",z);break;case"startUpload":var Aa=utils.serializeParam(editor.queryCommandValue("serverparam"))||"",y=utils.formatUrl(w+(w.indexOf("?")==-1?"?":"&")+"encode=utf-8&"+Aa);h.option("server",y);Z("uploading",z);break;case"stopUpload":Z("paused",z);break}});h.on("uploadBeforeSend",function(y,z,x){x["X_Requested_With"]="XMLHttpRequest"});h.on("uploadProgress",function(z,y){var Aa=r("#"+z.id),x=Aa.find(".progress span");x.css("width",y*100+"%");a[z.id][1]=y;j()});h.on("uploadSuccess",function(Ac,Aa){var Ab=r("#"+Ac.id);try{var z=(Aa._raw||Aa),y=utils.str2json(z);if(y.state=="SUCCESS"){K.push({"url":y.url,"type":y.type,"original":y.original});Ab.append('<span class="success"></span>')}else{Ab.find(".error").text(y.state).show()}}catch(x){Ab.find(".error").text(lang.errorServerUpload).show()}});h.on("uploadError",function(y,x){});h.on("error",function(x,y){if(x=="Q_TYPE_DENIED"||x=="F_EXCEED_SIZE"){f(y)}});h.on("uploadComplete",function(y,x){});n.on("click",function(){if(r(this).hasClass("disabled")){return false}if(c==="ready"){h.upload()}else{if(c==="paused"){h.upload()}else{if(c==="uploading"){h.stop()}}}});n.addClass("state-"+c);j()},getQueueCount:function(){var Z,V,W,X=0,Y=this.uploader.getFiles();for(V=0;Z=Y[V++];){W=Z.getStatus();if(W=="queued"||W=="uploading"||W=="progress"){X++}}return X},refresh:function(){this.uploader.refresh()}}})();