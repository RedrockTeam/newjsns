jQuery.extend(jQuery.fn.dataTableExt.oSort,{"file-size-pre":function(C){var B=C.substring(0,C.length-2);var A=(C.substring(C.length-2,C.length)=="MB"?1000:(C.substring(C.length-2,C.length)=="GB"?1000000:1));return parseInt(B*A,10)},"file-size-asc":function(B,A){return((B<A)?-1:((B>A)?1:0))},"file-size-desc":function(B,A){return((B<A)?1:((B>A)?-1:0))}});