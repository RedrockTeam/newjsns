(function(C){var A={crosshair:{mode:null,color:"rgba(170, 0, 0, 0.80)",lineWidth:1}};function B(E){var J={x:-1,y:-1,locked:false};E.setCrosshair=function I(L){if(!L){J.x=-1}else{var K=E.p2c(L);J.x=Math.max(0,Math.min(K.left,E.width()));J.y=Math.max(0,Math.min(K.top,E.height()))}E.triggerRedrawOverlay()};E.clearCrosshair=E.setCrosshair;E.lockCrosshair=function H(K){if(K){E.setCrosshair(K)}J.locked=true};E.unlockCrosshair=function G(){J.locked=false};function D(K){if(J.locked){return}if(J.x!=-1){J.x=-1;E.triggerRedrawOverlay()}}function F(L){if(J.locked){return}if(E.getSelection&&E.getSelection()){J.x=-1;return}var K=E.offset();J.x=Math.max(0,Math.min(L.pageX-K.left,E.width()));J.y=Math.max(0,Math.min(L.pageY-K.top,E.height()));E.triggerRedrawOverlay()}E.hooks.bindEvents.push(function(L,K){if(!L.getOptions().crosshair.mode){return}K.mouseout(D);K.mousemove(F)});E.hooks.drawOverlay.push(function(M,O){var N=M.getOptions().crosshair;if(!N.mode){return}var K=M.getPlotOffset();O.save();O.translate(K.left,K.top);if(J.x!=-1){var Q=M.getOptions().crosshair.lineWidth%2?0.5:0;O.strokeStyle=N.color;O.lineWidth=N.lineWidth;O.lineJoin="round";O.beginPath();if(N.mode.indexOf("x")!=-1){var P=Math.floor(J.x)+Q;O.moveTo(P,0);O.lineTo(P,M.height())}if(N.mode.indexOf("y")!=-1){var L=Math.floor(J.y)+Q;O.moveTo(0,L);O.lineTo(M.width(),L)}O.stroke()}O.restore()});E.hooks.shutdown.push(function(L,K){K.unbind("mouseout",D);K.unbind("mousemove",F)})}C.plot.plugins.push({init:B,options:A,name:"crosshair",version:"1.0"})})(jQuery);