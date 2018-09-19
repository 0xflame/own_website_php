<?php
session_start();
require_once("header_footer.php");
head("les impressionnistes");
?>
<header id="head" class="secondary"></header>
		<?php
		require_once("set_path.php");
		put_path();
		?>
	<h2>Les impressionnistes</h2>
	<hr size="1">
	<table class="cell">
		<tr>
			<td rowspan="3">
			<p><img src="img/claude_monet.gif" alt="Photo de Claude Monet"></p>
			</td>
			<td>
			<h4>&emsp;CLAUDE MONET</h4>
			</td>
		</tr>
		<tr>
			<td>
			<b>Paris 1840-1926 Giverny</b><br>
			</td>
		</tr>
		<tr>
			<td><p>Chef de file incontesté des impressionnistes, il passa son enfance au Havre où il fût l'élève de Boudin, il s'installa à Paris en 1858. Il y rencontra Troyon, peintre de l'école de Barbizon. En 1860, il fit ses études à l'Académie Suisse, se lia d'amitié avec Pissarro, Courbet, Bazille, Renoir, Sisley et fut particulièrement impressionné par Manet.<br><br>Grâce à une collecte d'argent, en 1890, il fit entrer « l'Olympia » peint par ce dernier dans le Patrimoine français.<br>Cette même année il acheta sa maison de Giverny dont le jardin et l'étang furent sa source d'inspiration jusqu'à sa mort.<br>Cézanne dit de lui « Ce n'est qu'un œil, mais mon Dieu, quel œil. »<br><br>Grand voyageur, dès 1912 son succès s'étendit à l'étranger. En 1920, il refusa son intégration à l'Institut de France.</p>
			</td>
		</tr>
	</table>

	<table class="cen">
	<tr>
		<th colspan="2">
		<p>QUELQUES OEUVRES</p>
		</th>
	</tr>
	<tr>
		<td>
		<p><img src="img/oeuvre_impressionniste_monet_3.jpg" alt="La jeune femme a l'ombrelle" /></p>
		</td>
		<td>
		<p><img src="img/oeuvre_impressionniste_monet_2.jpg" alt="Les coquelicots a argenteuil" /></p>
		</td>
	</tr>
	<tr>
		<td align="center">
		<span>LA JEUNE FEMME A L’OMBRELLE</span>
		</td>
		<td align="center">
		<span>LES COQUELICOTS A ARGENTEUIL</span>
		</td>
	</tr>
	</table>
	
	
	
<?php
require_once("header_footer.php");
footer();
?>