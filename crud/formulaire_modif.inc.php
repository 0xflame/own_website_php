<?php
$affichage ='MODIFICATION<hr>';

$formulaire = <<<EOD
<form method="POST" action="#">
<input type="hidden" name="id" value="$aUneFiche[0]" /><br>
<input type="text" name="name" value="$aUneFiche[1]" /><br>
<input type="text" name="fname" value="$aUneFiche[2]" /><br>
<input type="email" name="mail" value="$aUneFiche[3]" /><br>
<input type="text" name="phone" value="$aUneFiche[4]" /><br>
<input type="submit" name="btnenvoi" value="Envoyer" />
</form>
EOD;

echo $affichage.$formulaire;

?>