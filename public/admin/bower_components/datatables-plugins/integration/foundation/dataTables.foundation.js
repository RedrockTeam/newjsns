/* DataTables Foundation integration
 * ©2011-2014 SpryMedia Ltd - datatables.net/license
 */
(function(A,B,C){var D=function(F,E){F.extend(E.ext.classes,{sWrapper:"dataTables_wrapper dt-foundation"});F.extend(true,E.defaults,{dom:"<'row'<'small-6 columns'l><'small-6 columns'f>r>t<'row'<'small-6 columns'i><'small-6 columns'p>>",renderer:"foundation"});E.ext.renderer.pageButton.foundation=function(H,P,M,R,K,N){var Q=new E.Api(H);var L=H.oClasses;var J=H.oLanguage.oPaginate;var I,G;var O=function(V,X){var T,S,U,W;var Y=function(Z){Z.preventDefault();if(Z.data.action!=="ellipsis"){Q.page(Z.data.action).draw(false)}};for(T=0,S=X.length;T<S;T++){W=X[T];if(F.isArray(W)){O(V,W)}else{I="";G="";switch(W){case"ellipsis":I="&hellip;";G="unavailable";break;case"first":I=J.sFirst;G=W+(K>0?"":" unavailable");break;case"previous":I=J.sPrevious;G=W+(K>0?"":" unavailable");break;case"next":I=J.sNext;G=W+(K<N-1?"":" unavailable");break;case"last":I=J.sLast;G=W+(K<N-1?"":" unavailable");break;default:I=W+1;G=K===W?"current":"";break}if(I){U=F("<li>",{"class":L.sPageButton+" "+G,"aria-controls":H.sTableId,"tabindex":H.iTabIndex,"id":M===0&&typeof W==="string"?H.sTableId+"_"+W:null}).append(F("<a>",{"href":"#"}).html(I)).appendTo(V);H.oApi._fnBindAction(U,{action:W},Y)}}}};O(F(P).empty().html('<ul class="pagination"/>').children("ul"),R)};if(E.TableTools){F.extend(true,E.TableTools.classes,{"container":"DTTT button-group","buttons":{"normal":"button","disabled":"disabled"},"collection":{"container":"DTTT_dropdown dropdown-menu","buttons":{"normal":"","disabled":"disabled"}},"select":{"row":"active"}});F.extend(true,E.TableTools.DEFAULTS.oTags,{"collection":{"container":"ul","button":"li","liner":"a"}})}};if(typeof define==="function"&&define.amd){define(["jquery","datatables"],D)}else{if(typeof exports==="object"){D(require("jquery"),require("datatables"))}else{if(jQuery){D(jQuery,jQuery.fn.dataTable)}}}})(window,document);