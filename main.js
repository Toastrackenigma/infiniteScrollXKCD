function $(id) {
	return document.getElementById(id);
}
function nextTen() {
	var http = new XMLHttpRequest();
	http.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			$("txt").insertAdjacentHTML("beforeend",this.responseText);
			$("loading").style.display = $("loadingMsg").style.display = "none";
		}
	}
	http.open("GET","main.php?xkcd="+window.location.hash.slice(1),true);
	http.send();
	$("loading").style.display = $("loadingMsg").style.display = "block";
}
window.onload = function() {
	if (window.location.hash.length<2) {
		window.location.hash = "#1";
	}
	nextTen();
	$("jump").value = window.location.hash.slice(1);
}
window.onscroll = function() {
	if (window.innerHeight+window.scrollY>=document.body.scrollHeight) {
		window.location.hash = parseInt(window.location.hash.slice(1))+10
		nextTen();
	}
}