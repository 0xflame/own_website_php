<!DOCTYPE html>
<?php

if (!isset($_POST['nombre']) && !isset($_POST['nom'])) {

echo <<<EOT
<form method='POST' action='#'>
    <p>Nombre de zones de texte</p>
    <input type='text' name='nombre' />
    <input type='submit' value='Envoyer' />
</form>
EOT;

} else if (isset($_POST['nombre'])) {
    $n = $_POST['nombre'];
    $h = "<form method='POST' action='#'>";
    while ($n != 0) {
        $h .= "<input type='text' name='nom[]' /><br>";
        $n--;
    }
    $h.="<input type='submit' value='Envoyer' /></form>";
    echo $h;
} else {
extract($_POST);
var_dump($nom);
echo "<br><a href='nbzone.php'>retour arriere</a>";
}

?>