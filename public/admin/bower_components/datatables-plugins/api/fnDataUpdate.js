jQuery.fn.dataTableExt.oApi.fnDataUpdate=function(B,A,C){jQuery(A).find("TD").each(function(D){var E=B.oApi._fnVisibleToColumnIndex(B,D);B.oApi._fnSetCellData(B,C,E,jQuery(this).html())})};