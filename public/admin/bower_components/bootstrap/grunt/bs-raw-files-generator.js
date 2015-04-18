/*
 * Bootstrap Grunt task for generating raw-files.min.js for the Customizer
 * http://getbootstrap.com
 * Copyright 2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
"use strict";var fs=require("fs");var btoa=require("btoa");var glob=require("glob");function getFiles(A){var D={};var C=(A==="less");var B=(C?"/**/*":"/*");glob.sync(A+B).filter(function(E){return A==="fonts"?true:new RegExp("\\."+A+"$").test(E)}).forEach(function(F){var E=F.replace(/^[^/]+\//,"");D[E]=(A==="fonts"?btoa(fs.readFileSync(F)):fs.readFileSync(F,"utf8"))});return"var __"+A+" = "+JSON.stringify(D)+"\n"}module.exports=function generateRawFilesJs(E,A){if(!A){A=""}var F=["js","less","fonts"];var C=A+F.map(getFiles).reduce(function(G,H){return G+H},"");var B="docs/assets/js/raw-files.min.js";try{fs.writeFileSync(B,C)}catch(D){E.fail.warn(D)}E.log.writeln("File "+B.cyan+" created.")};