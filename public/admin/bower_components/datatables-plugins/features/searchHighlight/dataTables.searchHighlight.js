/* SearchHighlight for DataTables v1.0.1
 * 2014 SpryMedia Ltd - datatables.net/license
 */
(function(A,B,C){C(B).on("init.dt.dth",function(D,F,E){var G=new C.fn.dataTable.Api(F);var H=C(G.table().body());if(C(G.table().node()).hasClass("searchHighlight")||F.oInit.searchHighlight||C.fn.dataTable.defaults.searchHighlight){G.on("draw.dt.dth column-visibility.dt.dth",function(){H.unhighlight();if(G.rows({filter:"applied"}).data().length){H.highlight(G.search().split(" "))}}).on("destroy",function(){G.off("draw.dt.dth column-visibility.dt.dth")})}})})(window,document,jQuery);