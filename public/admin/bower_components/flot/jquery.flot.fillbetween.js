(function(C){var A={series:{fillBetween:null}};function B(E){function F(H,I){var G;for(G=0;G<I.length;++G){if(I[G].id===H.fillBetween){return I[G]}}if(typeof H.fillBetween==="number"){if(H.fillBetween<0||H.fillBetween>=I.length){return null}return I[H.fillBetween]}return null}function D(I,M,X){if(M.fillBetween==null){return}var H=F(M,I.getData());if(!H){return}var G=X.pointsize,R=X.points,K=H.datapoints.pointsize,U=H.datapoints.points,b=[],Y,O,T,Z,P,Q,J=M.lines.show,a=G>2&&X.format[2].y,V=J&&M.lines.steps,c=true,L=0,W=0,N,S;while(true){if(L>=R.length){break}N=b.length;if(R[L]==null){for(S=0;S<G;++S){b.push(R[L+S])}L+=G}else{if(W>=U.length){if(!J){for(S=0;S<G;++S){b.push(R[L+S])}}L+=G}else{if(U[W]==null){for(S=0;S<G;++S){b.push(null)}c=true;W+=K}else{Y=R[L];O=R[L+1];Z=U[W];P=U[W+1];Q=0;if(Y===Z){for(S=0;S<G;++S){b.push(R[L+S])}Q=P;L+=G;W+=K}else{if(Y>Z){if(J&&L>0&&R[L-G]!=null){T=O+(R[L-G+1]-O)*(Z-Y)/(R[L-G]-Y);b.push(Z);b.push(T);for(S=2;S<G;++S){b.push(R[L+S])}Q=P}W+=K}else{if(c&&J){L+=G;continue}for(S=0;S<G;++S){b.push(R[L+S])}if(J&&W>0&&U[W-K]!=null){Q=P+(U[W-K+1]-P)*(Y-Z)/(U[W-K]-Z)}L+=G}}c=false;if(N!==b.length&&a){b[N+2]=Q}}}}if(V&&N!==b.length&&N>0&&b[N]!==null&&b[N]!==b[N-G]&&b[N+1]!==b[N-G+1]){for(S=0;S<G;++S){b[N+G+S]=b[N+S]}b[N+1]=b[N-G+1]}}X.points=b}E.hooks.processDatapoints.push(D)}C.plot.plugins.push({init:B,options:A,name:"fillbetween",version:"1.0"})})(jQuery);