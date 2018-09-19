<header id="head" class="secondary"></header>
<?php require_once('set_path.php'); put_path(); ?>

<br><br>
<a href="creationfiches.php">Créer une nouvelle fiche</a><br><br>

<?php

$lstFiches = crud::Read();

foreach($lstFiches as $uneFiche)
{
    if(strlen($uneFiche) > 2) // Gestion du RC
    {
    $aUneFiche = explode(";", $uneFiche);
    $id=$aUneFiche[0];

    $action="<a href='sup_fiche.php?id=$id'>del</a>&nbsp;";
    $action.="<a href='modif_fiche.php?id=$id'>modif</a>";
    echo $uneFiche.$action.'<hr>';
    }
}
?>