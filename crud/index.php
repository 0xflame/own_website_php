<?php

require_once('DAL/data_util.inc.php');

?>

<a href="creationfiches.php">Créer une nouvelle fiche</a><br><br>

<?php


$lstFiches = ReadAllFiche();

foreach($lstFiches as $uneFiche)
{
    if(strlen($uneFiche) > 2) // Gestion du RC
    {
    $aUneFiche = explode(";", $uneFiche);
    $id=$aUneFiche[0];
    echo $uneFiche."<a href='sup_fiche.php?id=$id'>del</a>".'<hr>';
    }
}


?>