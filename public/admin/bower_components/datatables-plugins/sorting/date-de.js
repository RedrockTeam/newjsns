jQuery.extend(jQuery.fn.dataTableExt.oSort,{"de_datetime-asc":function(I,F){var G,H;if(jQuery.trim(I)!==""){var E=jQuery.trim(I).split(" ");var C=E[1].split(":");var A=E[0].split(".");G=(A[2]+A[1]+A[0]+C[0]+C[1])*1}else{G=Infinity}if(jQuery.trim(F)!==""){var D=jQuery.trim(F).split(" ");var B=D[1].split(":");D=D[0].split(".");H=(D[2]+D[1]+D[0]+B[0]+B[1])*1}else{H=Infinity}var J=((G<H)?-1:((G>H)?1:0));return J},"de_datetime-desc":function(I,F){var G,H;if(jQuery.trim(I)!==""){var E=jQuery.trim(I).split(" ");var C=E[1].split(":");var A=E[0].split(".");G=(A[2]+A[1]+A[0]+C[0]+C[1])*1}else{G=Infinity}if(jQuery.trim(F)!==""){var D=jQuery.trim(F).split(" ");var B=D[1].split(":");D=D[0].split(".");H=(D[2]+D[1]+D[0]+B[0]+B[1])*1}else{H=Infinity}var J=((G<H)?1:((G>H)?-1:0));return J},"de_date-asc":function(G,D){var E,F;if(jQuery.trim(G)!==""){var A=jQuery.trim(G).split(".");E=(A[2]+A[1]+A[0])*1}else{E=Infinity}if(jQuery.trim(D)!==""){var B=jQuery.trim(D).split(".");F=(B[2]+B[1]+B[0])*1}else{F=Infinity}var C=((E<F)?-1:((E>F)?1:0));return C},"de_date-desc":function(G,D){var E,F;if(jQuery.trim(G)!==""){var A=jQuery.trim(G).split(".");E=(A[2]+A[1]+A[0])*1}else{E=Infinity}if(jQuery.trim(D)!==""){var B=jQuery.trim(D).split(".");F=(B[2]+B[1]+B[0])*1}else{F=Infinity}var C=((E<F)?1:((E>F)?-1:0));return C}});