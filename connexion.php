<?php

$link = mysqli_connect("localhost", "root", "root", "lafnac") or die('erreur de connexion: '.mysqli_error($link));

$link->set_charset("utf8");

if (isset($_POST['login']) && isset($_POST['pass'])) {
	$login=$_POST['login'];
	$pass=$_POST['pass'];
}
else
	die("erreur, parametre(s) vide(s)...");

$query="SELECT prenom, nom, login, password FROM personne WHERE login='$login' AND password='$pass'";


$result = mysqli_query($link, $query) or die('erreur d\'insert: '.mysqli_error($link));

if (mysqli_num_rows($result) > 1)
	die("erreur de requete");

$row = mysqli_fetch_array($result);
$encode = $row['nom'].';'.$row['prenom'].';'.$row['login'].';'.$row['password'];

mysqli_free_result($result);

echo ($encode);

mysqli_close($link);
?>