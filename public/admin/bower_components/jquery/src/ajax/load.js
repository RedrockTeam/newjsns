define(["../core","../core/parseHTML","../ajax","../traversing","../manipulation","../selector","../event/alias"],function(B){var A=B.fn.load;B.fn.load=function(H,E,C){if(typeof H!=="string"&&A){return A.apply(this,arguments)}var F,G,J,D=this,I=H.indexOf(" ");if(I>=0){F=B.trim(H.slice(I));H=H.slice(0,I)}if(B.isFunction(E)){C=E;E=undefined}else{if(E&&typeof E==="object"){G="POST"}}if(D.length>0){B.ajax({url:H,type:G,dataType:"html",data:E}).done(function(K){J=arguments;D.html(F?B("<div>").append(B.parseHTML(K)).find(F):K)}).complete(C&&function(K,L){D.each(C,J||[K.responseText,L,K])})}return this}});