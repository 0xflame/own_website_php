	<header id="head" class="secondary"></header>
	<?php
		require_once("set_path.php");
		put_path();
		?>
	<script src="<?=js_url();?>jeu.js" type="text/javascript"></script>
		<link rel="stylesheet" href="<?=css_url();?>style_jeu.css" />
		<div class="b">
		<h1>test programmation javascript</h1>
		<h3>jeu de plus ou moins</h3>
		<div id="jPrRem" class="hid">
			<div id="jPrompt" >
				<table id="jPrompt_table" >
					<tr id="jPrompt_tr" >
						<td id="jPrompt_td" >  <p id="jPrompt_content"></p>  </td>
					</tr>
					<tr id="jPrompt_tr" >
						<td id="jPrompt_td" >  <input type="text" id="jPrompt_input" />  </td>
					</tr>
					<tr id="jPrompt_tr" >
						<td id="jPrompt_td" >  <button id='jPrompt_ok'></button>  </td>
					</tr>
				</table>
			</div>
		</div>
		<div id="jAlRem" class="hid">
			<div id="jAlert" >
				<table id="jAlert_table" >
					<tr id="jAlert_tr" >
						<td id="jAlert_td" >  <p id="jAlert_content"></p>  </td>
						<td id="jAlert_td" >  <button id='jAlert_ok'></button>  </td>
					</tr>
				</table>
			</div>
		</div>
		<div>
			Bonjour. Vous devez découvrir un nombre entre 1 et 500 (compris)<br>
			votre dernière proposition : <input type="text" id="proposition" readonly /><br>
			nombre d'essais : <input type="text" id="essais" value="0" readonly /><br>
			mon conseil : <input type="text" id="conseil" class="spec" readonly /><br>
			commentaire : <input type="text" id="com" class="spec" readonly /><br>
			<input id="reset" type="reset" value="réinitialiser" />
			<input id="jouer" type="button" value="jouer" />
		</div>
		</div>
		<br><br>