<?php

if(!isset($_GET['id']))
{
    die('id absent');
}

require_once('crud.php');

$id = $_GET['id'];

crud::destroy($id);

header('Location: repertoire.php');
?>