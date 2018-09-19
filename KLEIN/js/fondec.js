window.onload = function() {
	document.body.style.backgroundColor = "#000000";
	document.getElementById('trouge').onkeyup = recolor;
	document.getElementById('tvert').onkeyup = recolor;
	document.getElementById('tbleu').onkeyup = recolor;
	document.getElementById('brouge').onclick = rouge;
	document.getElementById('bvert').onclick = vert;
	document.getElementById('bbleu').onclick = bleu;
}

function rouge() {
	document.body.style.backgroundColor = "#FF0000";
	document.getElementById('trouge').value = "FF";
	document.getElementById('tvert').value = "00";
	document.getElementById('tbleu').value = "00";
	document.body.style.color = "white";
}

function vert() {
	document.body.style.backgroundColor = "#00FF00";
	document.getElementById('trouge').value = "00";
	document.getElementById('tvert').value = "FF";
	document.getElementById('tbleu').value = "00";
	document.body.style.color = "white";
}

function bleu() {
	document.body.style.backgroundColor = "#0000FF";
	document.getElementById('trouge').value = "00";
	document.getElementById('tvert').value = "00";
	document.getElementById('tbleu').value = "FF";
	document.body.style.color = "white";
}

function recolor() {
	var re = /[0-9A-Fa-f]/g;
	var r = document.getElementById('trouge').value;
	var v = document.getElementById('tvert').value;
	var b = document.getElementById('tbleu').value;
	
	var hex = r+v+b;
	if (re.test(hex)) {
		var str = "#" + r + v + b;
		if (str == "#FFFFFF")
			document.body.style.color = "black";
		else
			document.body.style.color = "white";
		document.body.style.backgroundColor = str;
	} else
		window.alert("invalid color code");
	re.lastIndex = 0;
}