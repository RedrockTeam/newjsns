jQuery.extend(jQuery.fn.dataTableExt.oSort,{"scientific-pre":function(A){return parseFloat(A)},"scientific-asc":function(B,A){return((B<A)?-1:((B>A)?1:0))},"scientific-desc":function(B,A){return((B<A)?1:((B>A)?-1:0))}});