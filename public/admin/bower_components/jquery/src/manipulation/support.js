define(["../var/support"],function(A){(function(){var C=document.createDocumentFragment(),D=C.appendChild(document.createElement("div")),B=document.createElement("input");B.setAttribute("type","radio");B.setAttribute("checked","checked");B.setAttribute("name","t");D.appendChild(B);A.checkClone=D.cloneNode(true).cloneNode(true).lastChild.checked;D.innerHTML="<textarea>x</textarea>";A.noCloneChecked=!!D.cloneNode(true).lastChild.defaultValue})();return A});