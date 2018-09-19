<?php

$link = mysqli_connect("localhost", "root", "root", "lafnac") or die('erreur de connexion: '.mysqli_error($link));

$link->set_charset("utf8");

if (isset($_POST['prenom']) && isset($_POST['nom']) && 
	isset($_POST['login']) && isset($_POST['pass'])) {
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$login=$_POST['login'];
	$pass=$_POST['pass'];
}
else
	die("erreur, parametre(s) vide(s)...");

$query="INSERT INTO personne(prenom, nom, login, password) VALUES ('$prenom', '$nom', '$login', '$pass')";


$result = mysqli_query($link, $query) or die('erreur d\'insert: '.mysqli_error($link));
echo $result;
mysqli_close($link);
?>