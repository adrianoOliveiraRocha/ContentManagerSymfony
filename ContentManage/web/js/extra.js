function ajax() {
	
	url = "/test";
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			    document.getElementById("central-content").innerHTML =
			    this.responseText;
			}
		else{
			document.getElementById("central-content").innerHTML = 'Carregando...';
		}
	};

	xhttp.open("GET", url, true);
	xhttp.send();

}

function location(){
	alert('test');
}