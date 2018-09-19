<header id="head" class="secondary"></header>
		<link rel="stylesheet" href="<?=css_url();?>fondec.css" />
		<script src="<?=js_url();?>fondec.js" type="text/javascript"></script>
		<?php
		require_once("set_path.php");
		put_path();
		?>
		<br><br>
		<p>Pour modifier la couleur du fond d'écran, cliquez sur les boutons!</p>
		<form>
			<table>
				<tr>
					<td class="rouge">Rouge</td><td class="vert">Vert</td><td class="bleu">Bleu :</td>
				</tr>
				<tr>
					<td class="rouge"><input type="text" id="trouge" value="00" maxlength="2" /></td>
					<td class="vert"><input type="text" id="tvert" value="00" maxlength="2" /></td>
					<td class="bleu"><input type="text" id="tbleu" value="00" maxlength="2" /></td>
				</tr>
				<tr>
					<th><input class="rouge" type="button" id="brouge" value="Rouge" maxlength="2" /></th>
					<th><input class="vert" type="button" id="bvert" value="Vert" maxlength="2" /></th>
					<th><input class="bleu" type="button" id="bbleu" value="Bleu" maxlength="2" /></th>
				</tr>
			</table>
		</form>
		<br><br><br><br><br><br><br>