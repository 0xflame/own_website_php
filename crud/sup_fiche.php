<?php

if(!isset($_GET['id']))
{
    die('id absent (mais enlever ce message) en production');
}

require_once('DAL/data_util.inc.php');

$id = $_GET['id'];

DeleteFiche($id);

header('Location: index.php');
?>