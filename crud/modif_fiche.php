<?php
if(isset($_GET['id']))
{
   require_once('DAL/data_util.inc.php');
   $aUneFiche = ReadOneFiche($_GET['id']);
   require_once('formulaire_modif.inc.php');
   //echo '<pre>';print_r($aUneFiche);die();
   //die();
}

if(isset($_POST['btnenvoi']))
{
    require_once('DAL/data_util.inc.php');
    extract($_POST);

// Attention ; si premiere fiche ne pas mettre RC !
$uneFiche = "$id;$name;$fname;$mail;$phone\n";
DeleteFiche($id);
CreateFiche($uneFiche);
//echo $uneFiche;
//file_put_contents('fiches.csv', $uneFiche, FILE_APPEND | LOCK_EX);
header('Location: index.php');
exit();
}


?>