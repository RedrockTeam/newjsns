(function(L,C,D){var G=[],H=L.resize=L.extend(L.resize,{}),M,A=false,B="setTimeout",E="resize",K=E+"-special-event",I="pendingDelay",J="activeDelay",N="throttleWindow";H[I]=200;H[J]=20;H[N]=true;L.event.special[E]={setup:function(){if(!H[N]&&this[B]){return false}var O=L(this);G.push(this);O.data(K,{w:O.width(),h:O.height()});if(G.length===1){M=D;F()}},teardown:function(){if(!H[N]&&this[B]){return false}var O=L(this);for(var P=G.length-1;P>=0;P--){if(G[P]==this){G.splice(P,1);break}}O.removeData(K);if(!G.length){if(A){cancelAnimationFrame(M)}else{clearTimeout(M)}M=null}},add:function(P){if(!H[N]&&this[B]){return false}var O;function Q(S,T,V){var R=L(this),U=R.data(K)||{};U.w=T!==D?T:R.width();U.h=V!==D?V:R.height();O.apply(this,arguments)}if(L.isFunction(P)){O=P;return Q}else{O=P.handler;P.handler=Q}}};function F(R){if(A===true){A=R||1}for(var P=G.length-1;P>=0;P--){var Q=L(G[P]);if(Q[0]==C||Q.is(":visible")){var T=Q.width(),S=Q.height(),O=Q.data(K);if(O&&(T!==O.w||S!==O.h)){Q.trigger(E,[O.w=T,O.h=S]);A=R||true}}else{O=Q.data(K);O.w=0;O.h=0}}if(M!==null){if(A&&(R==null||R-A<1000)){M=C.requestAnimationFrame(F)}else{M=setTimeout(F,H[I]);A=false}}}if(!C.requestAnimationFrame){C.requestAnimationFrame=function(){return C.webkitRequestAnimationFrame||C.mozRequestAnimationFrame||C.oRequestAnimationFrame||C.msRequestAnimationFrame||function(P,O){return C.setTimeout(function(){P((new Date).getTime())},H[J])}}()}if(!C.cancelAnimationFrame){C.cancelAnimationFrame=function(){return C.webkitCancelRequestAnimationFrame||C.mozCancelRequestAnimationFrame||C.oCancelRequestAnimationFrame||C.msCancelRequestAnimationFrame||clearTimeout}()}})(jQuery,this);(function(C){var A={};function B(F){function G(){var H=F.getPlaceholder();if(H.width()==0||H.height()==0){return}F.resize();F.setupGrid();F.draw()}function D(I,H){I.getPlaceholder().resize(G)}function E(I,H){I.getPlaceholder().unbind("resize",G)}F.hooks.bindEvents.push(D);F.hooks.shutdown.push(E)}C.plot.plugins.push({init:B,options:A,name:"resize",version:"1.0"})})(jQuery);