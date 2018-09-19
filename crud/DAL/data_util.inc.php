<?php

function ReadAllFiche()
{
    $contenuFile = file_get_contents('fiches.csv');
    $aFiches = explode("\n", $contenuFile);
    
    return $aFiches;
}

function DeleteFiche($p_id)
{
$lstFiches = ReadAllFiche();

unlink('fiches.csv');
//echo '<pre>';print_r($lstFiches);echo '</pre>';
foreach($lstFiches as $uneFiche)
{
    $aUneFiche = explode(";", $uneFiche);
    $id=$aUneFiche[0];
   
    if($id != $p_id)
        file_put_contents('fiches.csv', $uneFiche."\n",FILE_APPEND | LOCK_EX);
}

}
?>