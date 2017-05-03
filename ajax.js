var xmlHttp;
function showMatkul(str){
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp == null){
		alert("Tidak support request");
		return;
	}
	var url = "get_matkul.php?kodeprodi="+str;
	xmlHttp.onreadystatechange = prodiChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function prodiChanged(){
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete"){
		document.getElementById("divMatkul").innerHTML = xmlHttp.responseText;
	}
}
/* END OF OPTIONS*/

function showDosen(str){
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp == null){
		alert("Tidak support request");
		return;
	}
	var url = "get_dosen.php?kodematkul="+str;
	xmlHttp.onreadystatechange = dosenChanged;
	xmlHttp.open("GET",url,true);
	xmlHttp.send(null);
}
function dosenChanged(){
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == "complete"){
		document.getElementById("divDosen").innerHTML = xmlHttp.responseText;
	}
}
/* END OF OPTIONS*/

function GetXmlHttpObject(){
	var xmlHttp = null;
	try{
		xmlHttp = new XMLHttpRequest();
	}catch(e){
		try{
			xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(e){
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlHttp;
}
