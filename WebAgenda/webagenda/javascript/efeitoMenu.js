function newImage(arg) {
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() {
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() {
	if (document.images) {
		about_me_over = newImage("images/about-me-over.jpg");
		portfolio_over = newImage("images/portfolio-over.jpg");
		expo_over = newImage("images/expo-over.jpg");
		contact_over = newImage("images/contact-over.jpg");
		preloadFlag = true;
	}
}
function loadPage(url, divid){
	document.getElementById(divid).innerHTML = "<center>Carregando...</center>";
    $("#"+divid).load(url);
}