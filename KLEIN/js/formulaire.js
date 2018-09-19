function send() {
	var nom = document.getElementById('nom').value;
	var prenom = document.getElementById('prenom').value;
	var age = document.getElementById('age').value;
	var sexe;
	var result;
	if (isNumeric(age) == false || age > 120)
		age = "";
	if (document.forms.fi.sexe[0].checked)
		sexe = "homme";
	else if (document.forms.fi.sexe[1].checked)
		sexe = "femme"
	else
		sexe = "";
	if (isEmpty(nom) || isEmpty(prenom) || isEmpty(age) || isEmpty(sexe))
		result = "Bonjour l'inconnu";
	else {
		if (sexe == "homme")
			result = "Bonjour cher "
		else
			result = "Bonjour chère "
		result += prenom + " " + nom;
	}
	window.alert(result);
	if (result == "Bonjour l'inconnu")
		return false;
	return true;
}

function isEmpty(s) {
	if (s == "" || s.length == 0 || s == null)
		return true;
	return false;
}

function isNumeric(s) {
	var exp = /(^\d*$)/;
	return exp.test(s);
}

function remplir() {
	document.getElementById('nom').value = "nom";
	document.getElementById('prenom').value = "prenom";
	document.getElementById('age').value = "18";
}

function nverif() {
	document.getElementById('fi').submit();
}

window.onload = function() {
	document.getElementById('fi').onsubmit = send;
	document.getElementById('verif').onclick = nverif;
	document.getElementById('remplir').onclick = remplir;
}