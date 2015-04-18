define(["./core","./var/pnum","./css/var/cssExpand","./css/var/isHidden","./css/defaultDisplay","./data/var/data_priv","./core/init","./effects/Tween","./queue","./css","./deferred","./traversing"],function(S,A,I,D,M,Q){var E,O,K=/^(?:toggle|show|hide)$/,B=new RegExp("^(?:([+-])=|)("+A+")([a-z%]*)$","i"),L=/queueHooks$/,C=[F],J={"*":[function(W,Y){var X=this.createTween(W,Y),a=X.cur(),Z=B.exec(Y),b=Z&&Z[3]||(S.cssNumber[W]?"":"px"),T=(S.cssNumber[W]||b!=="px"&&+a)&&B.exec(S.css(X.elem,W)),U=1,V=20;if(T&&T[3]!==b){b=b||T[3];Z=Z||[];T=+a||1;do{U=U||".5";T=T/U;S.style(X.elem,W,T+b)}while(U!==(U=X.cur()/a)&&U!==1&&--V)}if(Z){T=X.start=+T||+a||0;X.unit=b;X.end=Z[1]?T+(Z[1]+1)*Z[2]:+Z[2]}return X}]};function N(){setTimeout(function(){E=undefined});return(E=S.now())}function P(T,V){var X,U=0,W={height:T};V=V?1:0;for(;U<4;U+=2-V){X=I[U];W["margin"+X]=W["padding"+X]=T}if(V){W.opacity=W.width=T}return W}function R(Y,X,T){var Z,W=(J[X]||[]).concat(J["*"]),V=0,U=W.length;for(;V<U;V++){if((Z=W[V].call(T,X,Y))){return Z}}}function F(W,h,d){var Z,b,Y,a,f,V,g,c,T=this,i={},X=W.style,U=W.nodeType&&D(W),e=Q.get(W,"fxshow");if(!d.queue){f=S._queueHooks(W,"fx");if(f.unqueued==null){f.unqueued=0;V=f.empty.fire;f.empty.fire=function(){if(!f.unqueued){V()}}}f.unqueued++;T.always(function(){T.always(function(){f.unqueued--;if(!S.queue(W,"fx").length){f.empty.fire()}})})}if(W.nodeType===1&&("height" in h||"width" in h)){d.overflow=[X.overflow,X.overflowX,X.overflowY];g=S.css(W,"display");c=g==="none"?Q.get(W,"olddisplay")||M(W.nodeName):g;if(c==="inline"&&S.css(W,"float")==="none"){X.display="inline-block"}}if(d.overflow){X.overflow="hidden";T.always(function(){X.overflow=d.overflow[0];X.overflowX=d.overflow[1];X.overflowY=d.overflow[2]})}for(Z in h){b=h[Z];if(K.exec(b)){delete h[Z];Y=Y||b==="toggle";if(b===(U?"hide":"show")){if(b==="show"&&e&&e[Z]!==undefined){U=true}else{continue}}i[Z]=e&&e[Z]||S.style(W,Z)}else{g=undefined}}if(!S.isEmptyObject(i)){if(e){if("hidden" in e){U=e.hidden}}else{e=Q.access(W,"fxshow",{})}if(Y){e.hidden=!U}if(U){S(W).show()}else{T.done(function(){S(W).hide()})}T.done(function(){var j;Q.remove(W,"fxshow");for(j in i){S.style(W,j,i[j])}});for(Z in i){a=R(U?e[Z]:0,Z,T);if(!(Z in e)){e[Z]=a.start;if(U){a.end=a.start;a.start=Z==="width"||Z==="height"?1:0}}}}else{if((g==="none"?M(W.nodeName):g)==="inline"){X.display=g}}}function G(Y,U){var V,X,W,T,Z;for(V in Y){X=S.camelCase(V);W=U[X];T=Y[V];if(S.isArray(T)){W=T[1];T=Y[V]=T[0]}if(V!==X){Y[X]=T;delete Y[V]}Z=S.cssHooks[X];if(Z&&"expand" in Z){T=Z.expand(T);delete Y[X];for(V in T){if(!(V in Y)){Y[V]=T[V];U[V]=W}}}else{U[X]=W}}}function H(U,a,Y){var T,V,b=0,W=C.length,Z=S.Deferred().always(function(){delete X.elem}),X=function(){if(V){return false}var i=E||N(),e=Math.max(0,c.startTime+c.duration-i),j=e/c.duration||0,f=1-j,h=0,g=c.tweens.length;for(;h<g;h++){c.tweens[h].run(f)}Z.notifyWith(U,[c,f,e]);if(f<1&&g){return e}else{Z.resolveWith(U,[c]);return false}},c=Z.promise({elem:U,props:S.extend({},a),opts:S.extend(true,{specialEasing:{}},Y),originalProperties:a,originalOptions:Y,startTime:E||N(),duration:Y.duration,tweens:[],createTween:function(e,f){var g=S.Tween(U,c.opts,e,f,c.opts.specialEasing[e]||c.opts.easing);c.tweens.push(g);return g},stop:function(f){var g=0,e=f?c.tweens.length:0;if(V){return this}V=true;for(;g<e;g++){c.tweens[g].run(1)}if(f){Z.resolveWith(U,[c,f])}else{Z.rejectWith(U,[c,f])}return this}}),d=c.props;G(d,c.opts.specialEasing);for(;b<W;b++){T=C[b].call(c,U,d,c.opts);if(T){return T}}S.map(d,R,c);if(S.isFunction(c.opts.start)){c.opts.start.call(U,c)}S.fx.timer(S.extend(X,{elem:U,anim:c,queue:c.opts.queue}));return c.progress(c.opts.progress).done(c.opts.done,c.opts.complete).fail(c.opts.fail).always(c.opts.always)}S.Animation=S.extend(H,{tweener:function(X,T){if(S.isFunction(X)){T=X;X=["*"]}else{X=X.split(" ")}var W,V=0,U=X.length;for(;V<U;V++){W=X[V];J[W]=J[W]||[];J[W].unshift(T)}},prefilter:function(T,U){if(U){C.unshift(T)}else{C.push(T)}}});S.speed=function(T,V,W){var U=T&&typeof T==="object"?S.extend({},T):{complete:W||!W&&V||S.isFunction(T)&&T,duration:T,easing:W&&V||V&&!S.isFunction(V)&&V};U.duration=S.fx.off?0:typeof U.duration==="number"?U.duration:U.duration in S.fx.speeds?S.fx.speeds[U.duration]:S.fx.speeds._default;if(U.queue==null||U.queue===true){U.queue="fx"}U.old=U.complete;U.complete=function(){if(S.isFunction(U.old)){U.old.call(this)}if(U.queue){S.dequeue(this,U.queue)}};return U};S.fn.extend({fadeTo:function(U,V,W,T){return this.filter(D).css("opacity",0).show().end().animate({opacity:V},U,W,T)},animate:function(X,U,W,T){var Z=S.isEmptyObject(X),V=S.speed(U,W,T),Y=function(){var a=H(this,S.extend({},X),V);if(Z||Q.get(this,"finish")){a.stop(true)}};Y.finish=Y;return Z||V.queue===false?this.each(Y):this.queue(V.queue,Y)},stop:function(T,V,U){var W=function(X){var Y=X.stop;delete X.stop;Y(U)};if(typeof T!=="string"){U=V;V=T;T=undefined}if(V&&T!==false){this.queue(T||"fx",[])}return this.each(function(){var X=true,Z=T!=null&&T+"queueHooks",Y=S.timers,a=Q.get(this);if(Z){if(a[Z]&&a[Z].stop){W(a[Z])}}else{for(Z in a){if(a[Z]&&a[Z].stop&&L.test(Z)){W(a[Z])}}}for(Z=Y.length;Z--;){if(Y[Z].elem===this&&(T==null||Y[Z].queue===T)){Y[Z].anim.stop(U);X=false;Y.splice(Z,1)}}if(X||!U){S.dequeue(this,T)}})},finish:function(T){if(T!==false){T=T||"fx"}return this.each(function(){var X,Z=Q.get(this),W=Z[T+"queue"],V=Z[T+"queueHooks"],Y=S.timers,U=W?W.length:0;Z.finish=true;S.queue(this,T,[]);if(V&&V.stop){V.stop.call(this,true)}for(X=Y.length;X--;){if(Y[X].elem===this&&Y[X].queue===T){Y[X].anim.stop(true);Y.splice(X,1)}}for(X=0;X<U;X++){if(W[X]&&W[X].finish){W[X].finish.call(this)}}delete Z.finish})}});S.each(["toggle","show","hide"],function(T,U){var V=S.fn[U];S.fn[U]=function(X,Y,W){return X==null||typeof X==="boolean"?V.apply(this,arguments):this.animate(P(U,true),X,Y,W)}});S.each({slideDown:P("show"),slideUp:P("hide"),slideToggle:P("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(T,U){S.fn[T]=function(W,X,V){return this.animate(U,W,X,V)}});S.timers=[];S.fx.tick=function(){var U,T=0,V=S.timers;E=S.now();for(;T<V.length;T++){U=V[T];if(!U()&&V[T]===U){V.splice(T--,1)}}if(!V.length){S.fx.stop()}E=undefined};S.fx.timer=function(T){S.timers.push(T);if(T()){S.fx.start()}else{S.timers.pop()}};S.fx.interval=13;S.fx.start=function(){if(!O){O=setInterval(S.fx.tick,S.fx.interval)}};S.fx.stop=function(){clearInterval(O);O=null};S.fx.speeds={slow:600,fast:200,_default:400};return S});