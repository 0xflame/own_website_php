<?php
if(isset($_GET['id']))
{
   require_once('crud.php');
   $aUneFiche = crud::read_one($_GET['id']);
   require_once('formulaire_modif.inc.php');
   //echo '<pre>';print_r($aUneFiche);die();
   //die();
}

if(isset($_POST['btnenvoi']))
{
    require_once('crud.php');
    extract($_POST);

	crud::update($id, "$id;$name;$fname;$mail;$phone\n");
	//echo $uneFiche;
	//file_put_contents('fiches.csv', $uneFiche, FILE_APPEND | LOCK_EX);
	header('Location: repertoire.php');
	exit();
}


?>