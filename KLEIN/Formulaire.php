<?php
session_start();
require_once("header_footer.php");
head("formulaire");
?>
<link rel="stylesheet" href="css/ins.css">
<script src="js/formulaire.js"></script>
<header id="head" class="secondary"></header>

		<?php
		require_once("set_path.php");
		put_path();
		?>

		<div>
			<h2 class="center">Formulaire d'inscription</h2>
			<br>
		</div>
		<form name="fi" id="fi" action="http://oslo/KLEIN/index.php" method="POST" class="center" >
			Entrez votre nom
			<input type="text" id="nom" name="nom" value="" required /><br>
			Entrez votre prénom
			<input type="text" id="prenom" name="prenom" value="" required /><br>
			Entrez votre âge
			<input type="text" id="age" value="" required /><br>
			Êtes-vous un homme ou une femme? Homme<input type="radio" name="sexe" value="homme" checked /> Femme<input type="radio" name="sexe" value="femme" /> <br>
			<div class="center">
				<input type="reset" value="RESET" />
				<input type="submit" name="valid" value="VALIDEZ" />
			</div>
			<div class="ita">
				DEBUG<br>
				<input type="button" id="remplir" value="Pré-Remplir" />
				<input type="submit" id="verif" name="verif" value="Envoie sans vérif" />
			</div>
		</form>
		
<?php
require_once("header_footer.php");
footer();
?>