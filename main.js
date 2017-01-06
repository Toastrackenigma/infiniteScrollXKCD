function $(id) {
	return document.getElementById(id);
}
var start = 1;
var end = 1;
var loading = false;
function nextTen(pos) {
	var http = new XMLHttpRequest();
	http.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			$("txt").insertAdjacentHTML(["beforeend","afterbegin"][pos],this.responseText);
			modalHide();
			if (pos) {
				window.location.hash = "#"+end;
			}
			loading = false;
		}
	}
	http.open("GET","main.php?xkcd="+window.location.hash.slice(1),true);
	http.send();
	modalShow("")
}
window.onload = function() {
	if (window.location.hash.length<2) {
		window.location.hash = "#1";
	}
	nextTen(0);
	start = end = window.location.hash.slice(1);
	if (start==1) {
		$("back").style.display = "none";
	}
}
window.onscroll = function() {
	if (window.innerHeight+window.scrollY>=document.body.scrollHeight&&!loading) {
		loading = true;
		window.location.hash = end = parseInt(window.location.hash.slice(1))+10
		nextTen(0);
	}
}
function prevTen() {
	if (start!=1) {
		start -= 10;
		if (start<=1) {
			$("back").style.transform = "scale(0,0)";
			start = 1;
		}
		window.location.hash = "#"+start;
		nextTen(1)
	}
}
function modalShow(id) {
	$("overlay").style.display = $("modal"+id).style.display = "block";
}
function modalHide() {
	$("overlay").style.display = $("modal").style.display = $("modal1").style.display = "none";
}
