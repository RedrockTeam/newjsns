/*
 * jQuery Waterfall v1.2
 * 
 * Author		: LeoLai
 * Blog			: http://leolai.cnblogs.com/
 * Mail 		: leolai.mail@qq.com
 * QQ 			: 657448678 
 * Date 		: 2013-4-19 
 * Last Update 	: 2013-5-23
 *
 **************************************************************
 * 1. 根据页面大小自动排列
 * 2. 自定义异步请求函数（返回JSON，json格式与html模板对应即可，默认格式请看demo json.js）
 * 3. 自定义html模板
 * 4. 图片自动按比例缩放
 * 5. 是否显示分页(未完成)
 * usage: url必填，其它不传将使用默认配置
	$('#id').waterfall({
		itemClass: 'wf_item',	// 砖块类名
		imgClass: 'thumb_img',	// 图片类名
		colWidth: 235,			// 列宽
		marginLeft: 15,			// 每列的左间宽
		marginTop: 15,			// 每列的上间宽
		perNum: 'auto',			// 每次下拉时显示多少个(默认是列数)
		isAnimation: true,		// 是否使用动画效果
		ajaxTimes: 'infinite',	// 限制加载的次数(int) 字符串'infinite'表示无限加载 
		url: null,				// 数据来源(ajax加载，返回json格式)，传入了ajaxFunc参数，此参数将无效
		ajaxFunc: null,			// 自定义异步函数, 第一个参数为成功回调函数，第二个参数为失败回调函数
								// 当执行成功回调函数时，传入返回的JSON数据作为参数
		createHtml: null		// 自定义生成html字符串函数,参数为一个信息集合，返回一个html字符串
	});
 *
 */
!function(G,A,B){function D(M,L,H){var J=0,I=0,N=null,K=null;for(done=function(){J===M.length&&(clearInterval(N),H&&H())};I<M.length;I++){K=M[I],K.height=parseInt(K.height),K.width=parseInt(K.width),K.height>=0&&K.width>=0?++J:!function(O){F(O[L],function(Q,P){O.width=Q,O.height=P,++J},null,function(){O.width=208,O.height=240,O.imgSrc="images/default.jpg",++J})}(K)}N=setInterval(done,40)}function C(I,H){clearTimeout(I.tid),H=H||null,I.tid=setTimeout(function(){I.call(H)},100)}function E(K){var H,M,N,I=K.slice(),J=[],L=K.length;for(H=0;L>H;H++){J[H]=H}for(H=0;L>H;H++){for(M=H;L>M;M++){I[M]<I[H]&&(N=I[H],I[H]=I[M],I[M]=N,N=J[H],J[H]=J[M],J[M]=N)}}return K.minHeight=K[J[0]],K.maxHeight=K[J[J.length-1]],J}G.fn.waterfall=function(X){function M(){J||N||Y.minHeight+U<G(A).height()+G(A).scrollTop()&&(L.length>0?Z():"infinite"===W.ajaxTimes||K<W.ajaxTimes?(Q("loading"),W.params.ajax=++K,O(function(g){try{"string"==typeof g&&(g=G.parseJSON(g)),G.isEmptyObject(g)||"string"==typeof g?Q("finish"):(L=L.concat(g.data).reverse(),Z())}catch(f){Q("error")}},function(){Q("error")})):Q("finish"))}function Z(){var g,h,f,i="number"==typeof W.perNum?W.perNum:W.colNum,j=null;V.height();D(L,W.imgUrlName,function(){for(;i-->0&&(j=L.pop());){S=E(Y)[0],a=S*(W.colWidth+W.marginLeft),P=Y[S]+W.marginTop,f=b(j),g=G("<div>").addClass(W.itemClass).html(f).css({left:a,top:P}).appendTo(V),h=g.find("."+W.imgClass),h.width("200px"),h.height(h.width()*(j.height/j.width)),W.isAnimation&&g.css({opacity:0}).animate({opacity:1},800),Y[S]=P+g.outerHeight(),Y[S]>Y.maxHeight&&(Y.maxHeight=Y[S]),V.height(Y.maxHeight)}N=!1,R.hide(),M()})}function T(){var f=0,g=0,j=0,h=0;if(f=Math.floor((d.width()+W.marginLeft)/(W.colWidth+W.marginLeft)),f>0&&f!==W.colNum){for(W.colNum=f,V.width((W.colWidth+W.marginLeft)*W.colNum-W.marginLeft),g=0;g<W.colNum;g++){Y[g]=0}Y.length=W.colNum,I=V.children(".wf_item"),I.each(function(){S=E(Y)[0],P=Y[S]+W.marginTop,a=S*(W.colWidth+W.marginLeft),W.isAnimation&&(h=300),G(this).width(W.colWidth).animate({left:a,top:P},h),Y[S]=P+G(this).outerHeight()}),E(Y),V.height(Y.maxHeight),M()}j=V.offset().left+(V.width()+d.width())/2-H.width(),c(H[0],{left:j,bottom:0})}function Q(f){switch(f){case"loading":N=!0,R.html("").addClass("wf_loading").show();break;case"error":R.removeClass("wf_loading").show().html("数据格式错误，请返回标准的Json数据或Json格式字符串！"),J=!0;break;case"finish":R.removeClass("wf_loading").show().html("已加载完毕，没有更多了！"),J=!0}}var d,V,I,R,H,W=G.extend({},G.fn.waterfall.defaults,X),e=!-[1]&&!A.XMLHttpRequest,K=0,N=!1,J=!1,Y=[],S=0,L=[],U=0,P=0,a=0,O=G.isFunction(W.ajaxFunc)?W.ajaxFunc:function(f,g){G.ajax({type:"GET",url:W.url,cache:!1,data:W.params,dataType:"json",timeout:60000,success:f,error:g})},b=G.isFunction(W.createHtml)?W.createHtml:function(f){return'<div class="wf_item_inner"><a href="'+f.href+'" class="thumb" target="_blank"><img class="'+W.imgClass+'"  src="'+f.imgSrc+'" /></a><h3 class="title"><a href="'+f.href+'" target="_blank">'+f.title+'</a></h3><p class="desc">'+f.describe+"</p></div>"},c=function(){var f=B.getElementsByTagName("html")[0],i=B.documentElement,g=B.body,h=i||g;return e&&"fixed"!==g.currentStyle.backgroundAttachment&&(f.style.backgroundImage="url(about:blank)",f.style.backgroundAttachment="fixed"),e?function(l,k){var m=l.style,j="(document.documentElement || document.body)";"number"!=typeof k.left&&(k.left=h.clientWidth-k.right-l.offsetWidth),"number"!=typeof k.top&&(k.top=h.clientHeight-k.bottom-l.offsetHeight),l.style.position="absolute",m.removeExpression("left"),m.removeExpression("top"),m.setExpression("left","eval("+j+".scrollLeft + "+k.left+') + "px"'),m.setExpression("top","eval("+j+".scrollTop + "+k.top+') + "px"')}:function(k,j){var l=k.style;l.position="fixed","number"==typeof j.left?l.left=j.left+"px":(l.left="auto",l.right=j.right+"px"),"number"==typeof j.top?l.top=j.top+"px":(l.top="auto",l.bottom=j.bottom+"px")}}();return this.each(function(){return G(this).data("_wf_is_done_")?!0:(d=G(this).addClass("waterfall").data("_wf_is_done_",!0),U=d.offset().top,V=d.children(".wf_col"),0===V.length&&(V=G("<div>").addClass("wf_col").appendTo(d)),R=G("<div>").addClass("wf_result").appendTo(d),H=G("<a></a>").attr("id","backTop").attr("title","返回顶部").appendTo(B.body),H.css("opacity",0).bind("click",function(){G("body,html").stop(!0).animate({scrollTop:U},500)}),G(B.body).css("overflow","scroll"),T(),G(B.body).css("overflow","auto"),M(),void G(A).bind("scroll",function(){G(A).scrollTop()>U?H.stop(!0).animate({opacity:1},500):H.stop(!0).animate({opacity:0},500),M()}).bind("resize",function(){C(T)}))})},G.fn.waterfall.defaults={itemClass:"wf_item",imgClass:"thumb_img",colWidth:235,marginLeft:15,marginTop:15,perNum:"auto",isAnimation:!0,ajaxTimes:"infinite",imgUrlName:"img_src",params:{},url:"",ajaxFunc:null,createHtml:null};var F=function(){var J=[],K=null,H=function(){for(var L=0;L<J.length;L++){J[L].end?J.splice(L--,1):J[L]()}!J.length&&I()},I=function(){clearInterval(K),K=null};return function(S,T,L,N){var Q,R,M,U,P,O=new Image();return S?(O.src=S,O.complete?(T(O.width,O.height),void (L&&L(O.width,O.height))):(R=O.width,M=O.height,Q=function(){U=O.width,P=O.height,(U!==R||P!==M||U*P>1024)&&(T(U,P),Q.end=!0)},Q(),O.onerror=function(){alert("图片加载错误"),N&&N(),Q.end=!0,O=O.onload=O.onerror=null},O.onload=function(){L&&L(O.width,O.height),!Q.end&&Q(),O=O.onload=O.onerror=null},void (Q.end||(J.push(Q),null===K&&(K=setInterval(H,40)))))):void (N&&N())}}()}(jQuery,window,document);