<?php

if(isset($_POST['btnenvoi']))
{
$id = time();
extract($_POST);

// Attention ; si premiere fiche ne pas mettre RC !
$uneFiche = "$id;$name;$fname;$mail;$phone\n";
//echo $uneFiche;
file_put_contents('fiches.csv', $uneFiche, FILE_APPEND | LOCK_EX);
header('Location: index.php');
exit();
}
else
{
require_once('formulaire_fiche.inc.php');
}


?>