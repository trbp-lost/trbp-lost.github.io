/*********************************** Copy *********************************************/
function salin() {
	alert('Sukses menyalin')
	var copyText = document.getElementById("cetak");
	copyText.select();
	document.execCommand("copy");

	var tooltip = document.getElementById("myTooltip");
	tooltip.innerHTML = "Tersalin " + copyText.value;
}

function copy() {
	var tooltip = document.getElementById("myTooltip");
	tooltip.innerHTML = "Salin isi teks";
}

/*********************************** Reload *********************************************/
function reload1() {
	window.location.reload();
}