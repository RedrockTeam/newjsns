jQuery.fn.dataTableExt.oApi.fnDisplayStart=function(B,A,C){if(typeof C=="undefined"){C=true}B._iDisplayStart=A;if(B.oApi._fnCalculateEnd){B.oApi._fnCalculateEnd(B)}if(C){B.oApi._fnDraw(B)}};