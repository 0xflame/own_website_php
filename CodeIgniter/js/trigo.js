function test() {
	console.log(dateMAJ());
	var i = 0;
	var t = document.createElement('table');
	var r;
	var c;
	t.border = "1";
	r = t.insertRow(0);
	c = r.insertCell(0);
	c.innerHTML = "Angle";
	c = r.insertCell(1);
	c.innerHTML = "Sinus";
	c = r.insertCell(2);
	c.innerHTML = "Cosinus";
	c = r.insertCell(3);
	c.innerHTML = "Tangeante";
	while (i <= 90) {
		r = t.insertRow(i+1);
		c = r.insertCell(0);
		c.innerHTML = i;
		c = r.insertCell(1);
		c.innerHTML = Math.sin(i);
		c = r.insertCell(2);
		c.innerHTML = Math.cos(i);
		c = r.insertCell(3);
		c.innerHTML = Math.tan(i);
		i++;
	}
	var h = document.createElement('h4');
	h.innerHTML = "Informations Utilisateur"
	document.getElementById('div_table').appendChild(h);
	var t2 = document.createElement('table');
	t2.border = "1";
	r=t2.insertRow(0);
	c=r.insertCell(0);
	c.innerHTML = navigator.appName;
	r=t2.insertRow(1);
	c=r.insertCell(0);
	c.innerHTML = navigator.appVersion;
	r=t2.insertRow(2);
	c=r.insertCell(0);
	c.innerHTML = navigator.appCodeName;
	r=t2.insertRow(3);
	c=r.insertCell(0);
	c.innerHTML = navigator.userAgent;
	r=t2.insertRow(4);
	c=r.insertCell(0);
	c.innerHTML = navigator.platform;
	document.getElementById('div_table').appendChild(t2);
	h = document.createElement('h4');
	h.innerHTML = "Tableau Trigonometrique";
	document.getElementById('div_table').appendChild(h);
	document.getElementById('div_table').appendChild(t);
	piedDePage();
	//window.stop();

}

function piedDePage() {
	var f = document.createElement('footer');
	f.innerHTML = "<a href=\"mailto:cedric.klein75003@gmail.com\">contactez-moi</a>";
	f.innerHTML += "<p>Copyright &copy; 2018 Cédric Klein<br>date de derniere mise a jour: " + dateMAJ() + "</p>";
	document.getElementById('div_table').appendChild(f);
}

function dateMAJ() {
	var derniereModif = document.lastModified;
	var dateModif = new Date(derniereModif);
	var mois = new Array("janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	var result = dateModif.getDate() + " " + mois[dateModif.getMonth()] + " " + dateModif.getFullYear();
	return(result);
}