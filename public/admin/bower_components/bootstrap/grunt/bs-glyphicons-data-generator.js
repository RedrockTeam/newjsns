/*
 * Bootstrap Grunt task for Glyphicons data generation
 * http://getbootstrap.com
 * Copyright 2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
"use strict";var fs=require("fs");module.exports=function generateGlyphiconsData(I){var D=fs.readFileSync("less/glyphicons.less","utf8");var F=D.split("\n");var J=/^\.(glyphicon-[a-zA-Z0-9-]+)/;var H="# This file is generated via Grunt task. **Do not edit directly.**\n# See the 'build-glyphicons-data' task in Gruntfile.js.\n\n";var G="docs/_data/glyphicons.yml";for(var E=0,A=F.length;E<A;E++){var B=F[E].match(J);if(B!==null){H+="- "+B[1]+"\n"}}if(!fs.existsSync("docs/_data")){fs.mkdirSync("docs/_data")}try{fs.writeFileSync(G,H)}catch(C){I.fail.warn(C)}I.log.writeln("File "+G.cyan+" created.")};