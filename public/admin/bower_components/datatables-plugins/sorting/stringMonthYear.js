jQuery.extend(jQuery.fn.dataTableExt.oSort,{"stringMonthYear-pre":function(B){var F=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];var C=B.split(" ");C[0]=C[0].replace(",","");C[1]=jQuery.trim(C[1]);var D=C[1];var E=0;for(var A=0;A<F.length;A++){if(F[A].toLowerCase()==C[0].toLowerCase().substring(0,3)){E=A;break}}return new Date(D,E,1)},"stringMonthYear-asc":function(B,A){return((B<A)?-1:((B>A)?1:0))},"stringMonthYear-desc":function(B,A){return((B<A)?1:((B>A)?-1:0))}});