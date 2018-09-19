<?php
session_start();
require_once("header_footer.php");
head("les poemes");
?>
<header id="head" class="secondary"></header>

		<?php
		require_once("set_path.php");
		put_path();
		?>

<h3>Vous etes correctement déconnecté!</h3>

<?php
$_SESSION['con'] = false;
session_destroy();
require_once("header_footer.php");
footer();
?>