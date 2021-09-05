// deixa o png transparente no IE 6
$(document).ready(function(){ 
	$(document).pngFix(); 
}); 


function hideShow(idUl){
	var oUl = document.getElementById(idUl);
	if(oUl.style.display == "" || oUl.style.display == "none"){
		oUl.style.display = "block";		
	}
	else {
		oUl.style.display = "none";
	}
}


function marcaMenu(){	
	var url = document.location.toString();
	var arUrl = url.split("?")
	var id = arUrl[1]
	document.getElementById(id).className = "linkSelected";
}

// inicializa os eventos 
!(window.addEventListener) ? window.attachEvent("onload", marcaMenu) : window.addEventListener("load", marcaMenu, false);