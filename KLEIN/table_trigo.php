<?php
session_start();
require_once("header_footer.php");
head("table trigonometrique");
?>
<header id="head" class="secondary"></header>
<?php
		require_once("set_path.php");
		put_path();
		?>
<script src="js/trigo.js" type="text/javascript"></script>
		<p>Generation du code HTML</p>
		<button id="tab" onClick="test()">Lancer</button>

		<p>Date de derniere mise a jour</p>
		<button id="maj" onClick="console.log(dateMAJ())">Lancer</button>
		
		<div id="div_table"></div>
		
<?php
require_once("header_footer.php");
footer();
?>