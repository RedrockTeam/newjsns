(function(){var B=window,F=document,A=B.MooTools.version.substring(0,3),D=A==="1.2"||A==="1.1",C=D||A==="1.3",E=B.$extend||function(){return Object.append.apply(Object,arguments)};B.HighchartsAdapter={init:function(K){var I=Fx.prototype,G=I.start,H=Fx.Morph.prototype,J=H.compute;I.start=function(L,N){var M=this,O=M.element;if(L.d){M.paths=K.init(O,O.d,M.toD)}G.apply(M,arguments);return this};H.compute=function(M,O,N){var L=this,P=L.paths;if(P){L.element.attr("d",K.step(P[0],P[1],N,L.toD))}else{return J.apply(L,arguments)}}},adapterRun:function(G,H){if(H==="width"||H==="height"){return parseInt($(G).getStyle(H),10)}},getScript:function(H,G){var I=F.getElementsByTagName("head")[0];var J=F.createElement("script");J.type="text/javascript";J.src=H;J.onload=G;I.appendChild(J)},animate:function(G,L,J){var I=G.attr,K,H=J&&J.complete;if(I&&!G.setStyle){G.getStyle=G.attr;G.setStyle=function(){var M=arguments;this.attr.call(this,M[0],M[1][0])};G.$family=function(){return true}}B.HighchartsAdapter.stop(G);K=new Fx.Morph(I?G:$(G),E({transition:Fx.Transitions.Quad.easeInOut},J));if(I){K.element=G}if(L.d){K.toD=L.d}if(H){K.addEvent("complete",H)}K.start(L);G.fx=K},each:function(H,G){return D?$each(H,G):Array.each(H,G)},map:function(H,G){return H.map(G)},grep:function(H,G){return H.filter(G)},inArray:function(H,I,G){return I?I.indexOf(H,G):-1},offset:function(G){var H=G.getPosition();return{left:H.x,top:H.y}},extendWithEvents:function(G){if(!G.addEvent){if(G.nodeName){G=$(G)}else{E(G,new Events())}}},addEvent:function(G,I,H){if(typeof I==="string"){if(I==="unload"){I="beforeunload"}B.HighchartsAdapter.extendWithEvents(G);G.addEvent(I,H)}},removeEvent:function(G,I,H){if(typeof G==="string"){return}if(G.addEvent){if(I){if(I==="unload"){I="beforeunload"}if(H){G.removeEvent(I,H)}else{if(G.removeEvents){G.removeEvents(I)}}}else{G.removeEvents()}}},fireEvent:function(G,J,I,H){var K={type:J,target:G};J=C?new Event(K):new DOMEvent(K);J=E(J,I);if(!J.target&&J.event){J.target=J.event.target}J.preventDefault=function(){H=null};if(G.fireEvent){G.fireEvent(J.type,J)}if(H){H(J)}},washMouseEvent:function(G){if(G.page){G.pageX=G.page.x;G.pageY=G.page.y}return G},stop:function(G){if(G.fx){G.fx.cancel()}}}}());