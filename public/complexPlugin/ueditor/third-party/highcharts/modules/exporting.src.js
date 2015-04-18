(function(Q){var A=Q.Chart,Z=Q.addEvent,I=Q.removeEvent,G=Q.createElement,K=Q.discardElement,Y=Q.css,T=Q.merge,N=Q.each,P=Q.extend,O=Math,c=O.max,U=document,R=window,J=Q.isTouchDevice,W="M",V="L",b="div",B="hidden",F="none",X="highcharts-",H="absolute",S="px",C,D=Q.Renderer.prototype.symbols,E=Q.getOptions(),a;P(E.lang,{printChart:"Print chart",downloadPNG:"Download PNG image",downloadJPEG:"Download JPEG image",downloadPDF:"Download PDF document",downloadSVG:"Download SVG vector image",contextButtonTitle:"Chart context menu"});E.navigation={menuStyle:{border:"1px solid #A0A0A0",background:"#FFFFFF",padding:"5px 0"},menuItemStyle:{padding:"0 10px",background:F,color:"#303030",fontSize:J?"14px":"11px"},menuItemHoverStyle:{background:"#4572A5",color:"#FFFFFF"},buttonOptions:{symbolFill:"#E0E0E0",symbolSize:14,symbolStroke:"#666",symbolStrokeWidth:3,symbolX:12.5,symbolY:10.5,align:"right",buttonSpacing:3,height:22,theme:{fill:"white",stroke:"none"},verticalAlign:"top",width:24}};E.exporting={type:"image/png",url:"http://export.highcharts.com/",buttons:{contextButton:{menuClassName:X+"contextmenu",symbol:"menu",_titleKey:"contextButtonTitle",menuItems:[{textKey:"printChart",onclick:function(){this.print()}},{separator:true},{textKey:"downloadPNG",onclick:function(){this.exportChart()}},{textKey:"downloadJPEG",onclick:function(){this.exportChart({type:"image/jpeg"})}},{textKey:"downloadPDF",onclick:function(){this.exportChart({type:"application/pdf"})}},{textKey:"downloadSVG",onclick:function(){this.exportChart({type:"image/svg+xml"})}}]}}};Q.post=function(L,e){var d,M;M=G("form",{method:"post",action:L,enctype:"multipart/form-data"},{display:F},U.body);for(d in e){G("input",{type:B,name:d,value:e[d]},null,M)}M.submit();K(M)};P(A.prototype,{getSVG:function(L){var f=this,l,k,M,h,d,g,e,j,i=T(f.options,L);if(!U.createElementNS){U.createElementNS=function(n,m){return U.createElement(m)}}k=G(b,null,{position:H,top:"-9999em",width:f.chartWidth+S,height:f.chartHeight+S},U.body);e=f.renderTo.style.width;j=f.renderTo.style.height;d=i.exporting.sourceWidth||i.chart.width||(/px$/.test(e)&&parseInt(e,10))||600;g=i.exporting.sourceHeight||i.chart.height||(/px$/.test(j)&&parseInt(j,10))||400;P(i.chart,{animation:false,renderTo:k,forExport:true,width:d,height:g});i.exporting.enabled=false;i.series=[];N(f.series,function(m){h=T(m.options,{animation:false,showCheckbox:false,visible:m.visible});if(!h.isInternal){i.series.push(h)}});l=new Q.Chart(i,f.callback);N(["xAxis","yAxis"],function(m){N(f[m],function(s,n){var o=l[m][n],r=s.getExtremes(),p=r.userMin,q=r.userMax;if(o&&(p!==C||q!==C)){o.setExtremes(p,q,true,false)}})});M=l.container.innerHTML;i=null;l.destroy();K(k);M=M.replace(/zIndex="[^"]+"/g,"").replace(/isShadow="[^"]+"/g,"").replace(/symbolName="[^"]+"/g,"").replace(/jQuery[0-9]+="[^"]+"/g,"").replace(/url\([^#]+#/g,"url(#").replace(/<svg /,'<svg xmlns:xlink="http://www.w3.org/1999/xlink" ').replace(/ href=/g," xlink:href=").replace(/\n/," ").replace(/<\/svg>.*?$/,"</svg>").replace(/&nbsp;/g,"\u00A0").replace(/&shy;/g,"\u00AD").replace(/<IMG /g,"<image ").replace(/height=([^" ]+)/g,'height="$1"').replace(/width=([^" ]+)/g,'width="$1"').replace(/hc-svg-href="([^"]+)">/g,'xlink:href="$1"/>').replace(/id=([^" >]+)/g,'id="$1"').replace(/class=([^" >]+)/g,'class="$1"').replace(/ transform /g," ").replace(/:(path|rect)/g,"$1").replace(/style="([^"]+)"/g,function(m){return m.toLowerCase()});M=M.replace(/(url\(#highcharts-[0-9]+)&quot;/g,"$1").replace(/&quot;/g,"'");return M},exportChart:function(d,e){d=d||{};var L=this,M=L.options.exporting,f=L.getSVG(T({chart:{borderRadius:0}},M.chartOptions,e,{exporting:{sourceWidth:d.sourceWidth||M.sourceWidth,sourceHeight:d.sourceHeight||M.sourceHeight}}));d=T(L.options.exporting,d);Q.post(d.url,{filename:d.filename||"chart",type:d.type,width:d.width||0,scale:d.scale||2,svg:f})},print:function(){var L=this,f=L.container,d=[],M=f.parentNode,e=U.body,g=e.childNodes;if(L.isPrinting){return}L.isPrinting=true;N(g,function(j,h){if(j.nodeType===1){d[h]=j.style.display;j.style.display=F}});e.appendChild(f);R.focus();R.print();setTimeout(function(){M.appendChild(f);N(g,function(j,h){if(j.nodeType===1){j.style.display=d[h]}});L.isPrinting=false},1000)},contextMenu:function(i,m,r,s,l,t,h){var u=this,k=u.options.navigation,L=k.menuItemStyle,p=u.chartWidth,o=u.chartHeight,n="cache-"+i,M=u[n],f=c(l,t),d="3px 3px 10px #888",g,q,j,e;if(!M){u[n]=M=G(b,{className:i},{position:H,zIndex:1000,padding:f+S},u.container);g=G(b,null,P({MozBoxShadow:d,WebkitBoxShadow:d,boxShadow:d},k.menuStyle),M);q=function(){Y(M,{display:F});if(h){h.setState(0)}u.openMenu=false};Z(M,"mouseleave",function(){j=setTimeout(q,500)});Z(M,"mouseenter",function(){clearTimeout(j)});Z(document,"mousedown",function(v){if(!u.pointer.inClass(v.target,i)){q()}});N(m,function(v){if(v){var w=v.separator?G("hr",null,null,g):G(b,{onmouseover:function(){Y(this,k.menuItemHoverStyle)},onmouseout:function(){Y(this,L)},onclick:function(){q();v.onclick.apply(u,arguments)},innerHTML:v.text||u.options.lang[v.textKey]},P({cursor:"pointer"},L),g);u.exportDivElements.push(w)}});u.exportDivElements.push(g,M);u.exportMenuWidth=M.offsetWidth;u.exportMenuHeight=M.offsetHeight}e={display:"block"};if(r+u.exportMenuWidth>p){e.right=(p-r-l-f)+S}else{e.left=(r-f)+S}if(s+t+u.exportMenuHeight>o&&h.alignOptions.verticalAlign!=="top"){e.bottom=(o-s-f)+S}else{e.top=(s+t-f)+S}Y(M,e);u.openMenu=true},addButton:function(i){var g=this,f=g.renderer,m=T(g.options.navigation.buttonOptions,i),k=m.onclick,n=m.menuItems,l,j,L={stroke:m.symbolStroke,fill:m.symbolFill},e=m.symbolSize||12;if(!g.btnCount){g.btnCount=0}if(!g.exportDivElements){g.exportDivElements=[];g.exportSVGElements=[]}if(m.enabled===false){return}var h=m.theme,M=h.states,p=M&&M.hover,o=M&&M.select,d;delete h.states;if(k){d=function(){k.apply(g,arguments)}}else{if(n){d=function(){g.contextMenu(j.menuClassName,n,j.translateX,j.translateY,j.width,j.height,j);j.setState(2)}}}if(m.text&&m.symbol){h.paddingLeft=Q.pick(h.paddingLeft,25)}else{if(!m.text){P(h,{width:m.width,height:m.height,padding:0})}}j=f.button(m.text,0,0,d,h,p,o).attr({title:g.options.lang[m._titleKey],"stroke-linecap":"round"});j.menuClassName=i.menuClassName||X+"menu-"+g.btnCount++;if(m.symbol){l=f.symbol(m.symbol,m.symbolX-(e/2),m.symbolY-(e/2),e,e).attr(P(L,{"stroke-width":m.symbolStrokeWidth||1,zIndex:1})).add(j)}j.add().align(P(m,{width:j.width,x:Q.pick(m.x,a)}),true,"spacingBox");a+=(j.width+m.buttonSpacing)*(m.align==="right"?-1:1);g.exportSVGElements.push(j,l)},destroyExport:function(d){var L=d.target,M,f;for(M=0;M<L.exportSVGElements.length;M++){f=L.exportSVGElements[M];if(f){f.onclick=f.ontouchstart=null;L.exportSVGElements[M]=f.destroy()}}for(M=0;M<L.exportDivElements.length;M++){f=L.exportDivElements[M];I(f,"mouseleave");L.exportDivElements[M]=f.onmouseout=f.onmouseover=f.ontouchstart=f.onclick=null;K(f)}}});D.menu=function(d,e,f,L){var M=[W,d,e+2.5,V,d+f,e+2.5,W,d,e+L/2+0.5,V,d+f,e+L/2+0.5,W,d,e+L-1.5,V,d+f,e+L-1.5];return M};A.prototype.callbacks.push(function(L){var M,d=L.options.exporting,e=d.buttons;a=0;if(d.enabled!==false){for(M in e){L.addButton(e[M])}Z(L,"destroy",L.destroyExport)}})}(Highcharts));