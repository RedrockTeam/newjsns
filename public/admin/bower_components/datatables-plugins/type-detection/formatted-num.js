jQuery.fn.dataTableExt.aTypes.unshift(function(B){var A=B.replace(/[^\d\-\.\/a-zA-Z]/g,"");if($.isNumeric(A)||A==="-"){return"formatted-num"}return null});