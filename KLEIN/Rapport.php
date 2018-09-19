<?php
session_start();
require_once("header_footer.php");
head("rapport");
?>
<header id="head" class="secondary"></header>
<?php
		require_once("set_path.php");
		put_path();
		?>
	<form>
			<h1>Rapport de Suivi de la Période en Entreprise</h1>
			<div>
				<b>Stagiaire</b>
				<table>
					<tr>
						<td>Nom et Prénom *</td>
						<td><input type="text" name="nom_prenom" required="required" /></td>
					</tr>
					<tr>
						<td>Formation *</td>
						<td><input type="text" name="formation" required="required" /></td>
					</tr>
				</table><br>
			</div>
			<div>
				<b>Entreprise</b>
				<table>
					<tr>
						<td>Nom *</td>
						<td><input type="text" name="nom" required="required" /></td>
					</tr>
					<tr>
						<td>Adresse *</td>
						<td><input type="text" name="adresse" required="required" /></td>
					</tr>
					<tr>
						<td>Nom du tuteur *</td>
						<td>
							<input type="text" name="nom_tuteur" required="required" />
							Fonction * 
							<input type="text" name="Fonction" required="required" />
						</td>
					</tr>
					<tr>
						<td>Tél *</td>
						<td>
							<input type="text" name="tel" required="required" />
							Port
							<input type="text" name="tel_port" />
							Email
							<input type="text" name="email" />
						</td>
					</tr>
					<tr>
						<td>Secteur d'activité *</td>
						<td><input type="text" name="secteur_activite" required="required" /></td>
					</tr>
				</table><br>
			</div>
			<div>
				<b>Observation sur le déroulement de la PAE</b>
				<table>
					<tr>
						<td>Objectifs d'acquisitions atteints*</td>
						<td><input type="radio" name="objectifs" value="totalement" required="required">totalement</td>
						<td><input type="radio" name="objectifs" value="partiellement" required="required">partiellement</td>
						<td><input type="radio" name="objectifs" value="non" required="required">non</td>
					</tr>
					<tr>
						<td>Comportement en milieu de travail*</td>
						<td><input type="radio" name="comportement" value="adapte" required="required">adapté</td>
						<td><input type="radio" name="comportement" value="progression" required="required">en progression</td>
						<td><input type="radio" name="comportement" value="peu" required="required">peu adapté</td>
					</tr>
					<tr>
						<td>Satisfaction de l'entreprise*</td>
						<td><input type="radio" name="satisfaction" value="satisfait" required="required">satisfaite</td>
						<td><input type="radio" name="satisfaction" value="peu" required="required">peu satisfaite</td>
						<td><input type="radio" name="satisfaction" value="pas" required="required">pas satisfaite</td>
					</tr>
				</table>
				Remarques<br>
				<input type="text" name="remarque"><br>
				Perspectives d'embauche *
				<input type="checkbox" name="embauche" value="cdd" />C.D.D.
				<input type="checkbox" name="embauche" value="cdi" />C.D.I.
				<input type="checkbox" name="embauche" value="alternance" />Alternance
				<input type="checkbox" name="embauche" value="neant" />Néant<br>
			</div>
			<br>
			<div>
				<b>Informations concernant l'activité de l'entreprise et les possibilités d'intervention</b><br>
				<br>
				Taille de l'entreprise &emsp;
				<input type="radio" name="taille" value="-10" />-10pers &emsp;
				<input type="radio" name="taille" value="+10" />+10pers &emsp;
				<input type="radio" name="taille" value="+50" />+50pers &emsp;
				<input type="radio" name="taille" value="+100" />+100pers<br>
				L'entreprise a-t-elle des projets de developpement &emsp;
				<input type="radio" name="projets" value="oui" />oui &emsp;
				<input type="radio" name="projets" value="non" />non<br>
				Remarques<br>
				<input type="text" name="remarque2"><br>
				Emission d'une fiche Prospect/Client &emsp;
				<input type="radio" name="pros" value="non" />non &emsp;
				<input type="radio" name="pros" value="oui" />oui &emsp; date
				<input type="text" name="date" /><br>
			</div>
			<br>
			<div>
				<b>Formateur</b><br>
				<table>
					<tr>
						<td>Nom et Prénom *</td>
						<td><input type="text" name="nom_prenom_formateur" required="required" /></td>
					</tr>
					<tr>
						<td>Date de la visite</td>
						<td>
							<input type="text" name="date_visite" />
							Date du contact téléphonique
							<input type="text" name="date_contact" />
						</td>
					</tr>
				</table>
			</div>
			<br><br>
			<input type="submit" value="Soumettre" />
			<input type="reset" value="Reset" />
			<input type="reset" value="Annuler" /><br><br>
			<i>DEBUG</i><br>
			<input type="button" value="Pré-remplir" />
			<input type="button" value="Envoie sans vérif" /><br>
			* Champs obligatoires	
		</form>
		
		
		
		
<?php
require_once("header_footer.php");
footer();
?>