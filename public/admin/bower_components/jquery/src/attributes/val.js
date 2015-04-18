define(["../core","./support","../core/init"],function(C,A){var B=/\r/g;C.fn.extend({val:function(H){var F,G,E,D=this[0];if(!arguments.length){if(D){F=C.valHooks[D.type]||C.valHooks[D.nodeName.toLowerCase()];if(F&&"get" in F&&(G=F.get(D,"value"))!==undefined){return G}G=D.value;return typeof G==="string"?G.replace(B,""):G==null?"":G}return}E=C.isFunction(H);return this.each(function(I){var J;if(this.nodeType!==1){return}if(E){J=H.call(this,I,C(this).val())}else{J=H}if(J==null){J=""}else{if(typeof J==="number"){J+=""}else{if(C.isArray(J)){J=C.map(J,function(K){return K==null?"":K+""})}}}F=C.valHooks[this.type]||C.valHooks[this.nodeName.toLowerCase()];if(!F||!("set" in F)||F.set(this,J,"value")===undefined){this.value=J}})}});C.extend({valHooks:{option:{get:function(D){var E=C.find.attr(D,"value");return E!=null?E:C.trim(C.text(D))}},select:{get:function(D){var H,L,J=D.options,E=D.selectedIndex,G=D.type==="select-one"||E<0,K=G?null:[],F=G?E+1:J.length,I=E<0?F:G?E:0;for(;I<F;I++){L=J[I];if((L.selected||I===E)&&(A.optDisabled?!L.disabled:L.getAttribute("disabled")===null)&&(!L.parentNode.disabled||!C.nodeName(L.parentNode,"optgroup"))){H=C(L).val();if(G){return H}K.push(H)}}return K},set:function(H,I){var D,E,G=H.options,J=C.makeArray(I),F=G.length;while(F--){E=G[F];if((E.selected=C.inArray(E.value,J)>=0)){D=true}}if(!D){H.selectedIndex=-1}return J}}}});C.each(["radio","checkbox"],function(){C.valHooks[this]={set:function(D,E){if(C.isArray(E)){return(D.checked=C.inArray(C(D).val(),E)>=0)}}};if(!A.checkOn){C.valHooks[this].get=function(D){return D.getAttribute("value")===null?"on":D.value}}})});