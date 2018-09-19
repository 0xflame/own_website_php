<?php

if(isset($_POST['btnenvoi']))
{    
$id = time();
extract($_POST);

// Attention ; si premiere fiche ne pas mettre RC !
$uneFiche = "$id;$name;$fname;$mail;$phone\n";
//echo $uneFiche;
require_once('crud.php');
crud::create($uneFiche);
header('Location: repertoire.php');
exit();
}
else
{
require_once('header_footer.php');
head('creation repertoire');
echo "<header id='head' class='secondary'></header>";
require_once('formulaire_fiche.inc.php');
footer();
}


?>