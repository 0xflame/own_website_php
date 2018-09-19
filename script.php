<?php

$link = mysqli_connect("localhost", "root", "root", "lafnac") or die('erreur de connexion: '.mysqli_error($link));

$link->set_charset("utf8");

$query="SELECT * FROM article";

$result = mysqli_query($link, $query) or die('erreur d\'insert: '.mysqli_error($link));

while($row = mysqli_fetch_array($result)){
	
	array_push($reponse,
	
	array(	'idArticle'=>$row["idArticle"],
			'titre'=>$row["titre"],
			'description'=>$row["description"],
			'prix'=>$row["prix"],
			'photo'=>$row["photo"]
	));
}  

mysqli_free_result($result);
mysqli_close($link); 

$encode = json_encode($reponse);
echo($encode);

?>