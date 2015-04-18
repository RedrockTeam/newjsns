(function(F){function G(){return !!this.points.length}function A(){this.hasData()?this.hideNoData():this.showNoData()}var B=F.seriesTypes,C=F.Chart.prototype,D=F.getOptions(),E=F.extend;E(D.lang,{noData:"No data to display"});D.noData={position:{x:0,y:0,align:"center",verticalAlign:"middle"},attr:{},style:{fontWeight:"bold",fontSize:"12px",color:"#60606a"}};B.pie.prototype.hasData=G;if(B.gauge){B.gauge.prototype.hasData=G}if(B.waterfall){B.waterfall.prototype.hasData=G}F.Series.prototype.hasData=function(){return this.dataMax!==void 0&&this.dataMin!==void 0};C.showNoData=function(I){var H=this.options,I=I||H.lang.noData,H=H.noData;if(!this.noDataLabel){this.noDataLabel=this.renderer.label(I,0,0,null,null,null,null,null,"no-data").attr(H.attr).css(H.style).add(),this.noDataLabel.align(E(this.noDataLabel.getBBox(),H.position),!1,"plotBox")}};C.hideNoData=function(){if(this.noDataLabel){this.noDataLabel=this.noDataLabel.destroy()}};C.hasData=function(){for(var I=this.series,H=I.length;H--;){if(I[H].hasData()&&!I[H].options.isInternal){return !0}}return !1};C.callbacks.push(function(H){F.addEvent(H,"load",A);F.addEvent(H,"redraw",A)})})(Highcharts);