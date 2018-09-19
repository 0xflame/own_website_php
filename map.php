<?php

$link = mysqli_connect("localhost", "root", "root", "lafnac") or die('erreur de connexion: '.mysqli_error($link));

$link->set_charset("utf8");

$query="SELECT * FROM magasin";


$result = mysqli_query($link, $query) or die('erreur de select: '.mysqli_error($link));

if (mysqli_num_rows($result) < 1)
	die("erreur de requete");

$row = mysqli_fetch_array($result);
$encode = $row['idMagasin'].'/'.$row['titre'].'/'.$row['latitude'].'/'.$row['longitude'].'/'.$row['image'];

while($row = mysqli_fetch_array($result)){
	$encode .= ';'.$row['idMagasin'].'/'.$row['titre'].'/'.$row['latitude'].'/'.$row['longitude'].'/'.$row['image'];
}

mysqli_free_result($result);

echo ($encode);

mysqli_close($link);

?>