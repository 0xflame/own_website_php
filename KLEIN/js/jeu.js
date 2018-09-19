var nombre = Math.floor(Math.random() * Math.floor(500))+1;
var num = [];
console.log(nombre);

window.onload = function() {
	document.getElementById('essais').value = 0;
	document.getElementById('reset').onclick = reset;
	document.getElementById('jouer').onclick = jPrompt;
	document.getElementById('jAlert_ok').onclick = jAlertagree;
	document.getElementById('jPrompt_ok').onclick = jPromptagree;
}

function reset() {
	document.getElementById('jouer').style.display = "initial";
	document.getElementById('proposition').value = "";
	document.getElementById('essais').value = 0;
	document.getElementById('conseil').value = "";
	document.getElementById('com').value = "";
	nombre = Math.floor(Math.random() * Math.floor(500))+1;
	console.log(nombre);
}

function jouer() {
	var tmp = parseInt(document.getElementById('jPrompt_input').value);
	document.getElementById('jPrompt_input').value = "";
	if (isNaN(tmp))
		jPrompt("Entrez un nombre s'il vous plait!", "OK");
	else if (tmp > 500 || tmp < 1)
		if (tmp != -1)
			jPrompt("on a dit un nombre entre 1 et 500!", "OK");
		else
			conseil();
	else
	{
		num.push(tmp);
		document.getElementById('proposition').value = num[num.length-1];
		document.getElementById('essais').value = num.length;
		if (num[num.length-1] == nombre)
			jAlert("Vous avez gagné! Bravo!", "Yeah!")
		encouragement();
	}
}

function encouragement() {
	if (num[num.length-1] < nombre)
		if (num[num.length-1] < num[num.length-2] && num[num.length-2] < nombre)
			document.getElementById('conseil').value = "je viens de vous dire que c'est trop PETIT!";
		else
			document.getElementById('conseil').value = "c'est trop petit";
	else if (num[num.length-1] > nombre)
		if (num[num.length-1] > num[num.length-2] && num[num.length-2] > nombre)
			document.getElementById('conseil').value = "je viens de vous dire que c'est trop GRAND!";
		else
			document.getElementById('conseil').value = "c'est trop grand";
	if ((nombre - num[num.length-1]) <= 50 && (nombre - num[num.length-1]) >= -50)
			document.getElementById('com').value = "on est pas loin!";
	else if (num.length > 10)
		document.getElementById('com').value = "tu va trouver un jour?";
	else if (num.length > 20)
		document.getElementById('com').value = "abandonne, je dirais que tu as gagné...";
	if (nombre == num[num.length-1])
		document.getElementById('com').value = "gagné!";	
}

function conseil() {
	if (nombre > 250)
		document.getElementById('conseil').value = "essayer au dessus de 250...";
	else if (nombre < 250)
		document.getElementById('conseil').value = "essayer en dessous de 250...";
	else
		document.getElementById('conseil').value = "je sais pas...";
}

function jAlert(text, customokay){
	document.body.style.backgroundColor = "grey";
	document.getElementById('jouer').style.display = "none";
	document.getElementById('jAlRem').style.display = "initial";
	document.getElementById('jAlert_content').innerHTML = text;
    document.getElementById('jAlert_ok').innerHTML = customokay;
    document.body.style.backgroundColor = "gray";
}
function jAlertagree() {
	document.body.style.backgroundColor = "black";
	document.getElementById('jAlRem').style.display = "none";
}

function jPrompt(text, customokay) {
	if (customokay == undefined) {
		text = "entrez votre proposition (-1 pour un conseil)";
		customokay = "OK"
	}
	document.body.style.backgroundColor = "grey";
	document.getElementById('jouer').style.display = "none";
	document.getElementById('jPrRem').style.display = "initial";
	document.getElementById('jPrompt_content').innerHTML = text;
    document.getElementById('jPrompt_ok').innerHTML = customokay;
    document.body.style.backgroundColor = "gray";
}

function jPromptagree() {
	document.getElementById('jouer').style.display = "initial";
	document.body.style.backgroundColor = "black";
	document.getElementById('jPrRem').style.display = "none";
	jouer();
}