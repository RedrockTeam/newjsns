jQuery.extend(jQuery.fn.dataTableExt.oSort,{"anti-the-pre":function(A){return A.replace(/^the /i,"")},"anti-the-asc":function(B,A){return((B<A)?-1:((B>A)?1:0))},"anti-the-desc":function(B,A){return((B<A)?1:((B>A)?-1:0))}});