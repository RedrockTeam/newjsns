$.fn.dataTable.ext.order["dom-text"]=function(B,A){return this.api().column(A,{order:"index"}).nodes().map(function(D,C){return $("input",D).val()})};