jQuery.fn.dataTableExt.aTypes.unshift(function(A){if(/^\d{1,3}[\.]\d{1,3}[\.]\d{1,3}[\.]\d{1,3}$/.test(A)){return"ip-address"}return null});