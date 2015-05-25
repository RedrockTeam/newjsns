/*
 Slimbox v2.05 - The ultimate lightweight Lightbox clone for jQuery
 (c) 2007-2013 Christophe Beyls <http://www.digitalia.be>
 MIT-style license.
 */
!function(a){function B(){var m=O.scrollLeft(),n=O.width();a([U,Q]).css("left",m+n/2),K&&a(d).css({left:m,top:O.scrollTop(),width:n,height:O.height()})}function X(m){if(m){a("object").add(I?"select":"embed").each(function(o,n){A[o]=[n,n.style.visibility],n.style.visibility="hidden"})}else{a.each(A,function(o,n){n[0].style.visibility=n[1]}),A=[]}var l=m?"bind":"unbind";O[l]("scroll resize",B),a(document)[l]("keydown",e)}function e(n){var l=n.which,m=a.inArray;return m(l,G.closeKeys)>=0?J():m(l,G.nextKeys)>=0?C():m(l,G.previousKeys)>=0?F():null}function F(){return T(k)}function C(){return T(Z)}function T(l){return l>=0&&(H=l,W=R[H][0],k=(H||(G.loop?R.length:0))-1,Z=(H+1)%R.length||(G.loop?0:-1),f(),U.className="lbLoading",b=new Image(),b.onload=L,b.src=W),!1}function L(){U.className="",a(M).css({backgroundImage:"url("+W+")",visibility:"hidden",display:""}),a(c).width(b.width),a([c,Y,V]).height(b.height),a(D).html(R[H][1]||""),a(j).html((R.length>1&&G.counterText||"").replace(/{x}/,H+1).replace(/{y}/,R.length)),k>=0&&(N.src=R[k][0]),Z>=0&&(g.src=R[Z][0]),E=M.offsetWidth,P=M.offsetHeight;var l=Math.max(0,h-P/2);U.offsetHeight!=P&&a(U).animate({height:P,top:l},G.resizeDuration,G.resizeEasing),U.offsetWidth!=E&&a(U).animate({width:E,marginLeft:-E/2},G.resizeDuration,G.resizeEasing),a(U).queue(function(){a(Q).css({width:E,top:l+P,marginLeft:-E/2,visibility:"hidden",display:""}),a(M).css({display:"none",visibility:"",opacity:""}).fadeIn(G.imageFadeDuration,S)})}function S(){k>=0&&a(Y).show(),Z>=0&&a(V).show(),a(i).css("marginTop",-i.offsetHeight).animate({marginTop:0},G.captionAnimationDuration),Q.style.visibility=""}function f(){b.onload=null,b.src=N.src=g.src=W,a([U,M,i]).stop(!0),a([Y,V,M,Q]).hide()}function J(){return H>=0&&(f(),H=k=Z=-1,a(U).hide(),a(d).stop().fadeOut(G.overlayFadeDuration,X)),!1}var G,R,W,k,Z,K,h,E,P,d,U,M,c,Y,V,Q,i,D,j,O=a(window),H=-1,I=!window.XMLHttpRequest,A=[],b=(document.documentElement,{}),N=new Image(),g=new Image();a(function(){a("body").append(a([d=a('<div id="lbOverlay" />').click(J)[0],U=a('<div id="lbCenter" />')[0],Q=a('<div id="lbBottomContainer" />')[0]]).css("display","none")),M=a('<div id="lbImage" />').appendTo(U).append(c=a('<div style="position: relative;" />').append([Y=a('<a id="lbPrevLink" href="#" />').click(F)[0],V=a('<a id="lbNextLink" href="#" />').click(C)[0]])[0])[0],i=a('<div id="lbBottom" />').appendTo(Q).append([a('<a id="lbCloseLink" href="#" />').click(J)[0],D=a('<div id="lbCaption" />')[0],j=a('<div id="lbNumber" />')[0],a('<div style="clear: both;" />')[0]])[0]}),a.slimbox=function(m,l,n){return G=a.extend({loop:!1,overlayOpacity:0.8,overlayFadeDuration:400,resizeDuration:400,resizeEasing:"swing",initialWidth:250,initialHeight:250,imageFadeDuration:400,captionAnimationDuration:400,counterText:"Image {x} of {y}",closeKeys:[27,88,67],previousKeys:[37,80],nextKeys:[39,78]},n),"string"==typeof m&&(m=[[m,l]],l=0),h=O.scrollTop()+O.height()/2,E=G.initialWidth,P=G.initialHeight,a(U).css({top:Math.max(0,h-P/2),width:E,height:P,marginLeft:-E/2}).show(),K=I||d.currentStyle&&"fixed"!=d.currentStyle.position,K&&(d.style.position="absolute"),a(d).css("opacity",G.overlayOpacity).fadeIn(G.overlayFadeDuration),B(),X(1),R=m,G.loop=G.loop&&R.length>1,T(l)},a.fn.slimbox=function(l,n,m){n=n||function(q){return[q.href,a(q).attr("data-content")||q.title]},m=m||function(){return !0};var p,o=this;return o.on("click",".js-open_box",function(v){v.preventDefault(),p=o.find(".js-link");var t,q,s=this,u=0,r=0;for(t=a.grep(p,function(w,x){return m.call(s,w,x)}),q=t.length;q>r;++r){t[r]==s&&(u=r),t[r]=n(t[r],r)}return a.slimbox(t,u,l)})}}(jQuery);