<?php

function head($str) {
if (!isset($_SESSION['con']))
	$_SESSION['con'] = 0;
echo <<<EOD
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title> $str - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- my css style -->
	<link rel="stylesheet" href="css/style.css">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template" height="50"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
EOD;
	navbar();
echo <<<'EOT'

					</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	
EOT;
}
 
function navbar() {
	$page = $_SERVER['REQUEST_URI'];
    $page = str_replace("/KLEIN/", "",$page);
	if (true) {
		?>
					<li <?php if($page == "index.php"){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
					<li <?php if($page == "about.php"){echo 'class="active"';} ?>><a href="about.php">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li <?php if($page == "sidebar-left.php"){echo 'class="active"';} ?>><a href="sidebar-left.php">Left Sidebar</a></li>
							<li <?php if($page == "sidebar-right.php"){echo 'class="active"';} ?>><a href="sidebar-right.php">Right Sidebar</a></li>
							<li <?php if($page == "Item3.php"){echo 'class="active"';} ?>><a href="Item3.php">Les Poemes</a></li>
							<li <?php if($page == "Item5.php"){echo 'class="active"';} ?>><a href="Item5.php">Les Impressionnistes</a></li>
							<li <?php if($page == "Item6.php"){echo 'class="active"';} ?>><a href="Item6.php">Modeles UML</a></li>
							<li <?php if($page == "apport.php"){echo 'class="active"';} ?>><a href="Rapport.php">Rapport de suivi en entreprise</a></li>
							<li <?php if($page == "table.php"){echo 'class="active"';} ?>><a href="table.php">Table CD audio</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">JS<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li <?php if($page == "jeu.php"){echo 'class="active"';} ?>><a href="jeu.php">jeu</a></li>
							<li <?php if($page == "fondec.php"){echo 'class="active"';} ?>><a href="fondec.php">fondec couleur</a></li>
							<li <?php if($page == "table_trigo.php"){echo 'class="active"';} ?>><a href="table_trigo.php">table trigonometrique</a></li>
						</ul>
					</li>
					<li <?php if($page == "Formulaire.php"){echo 'class="active"';} ?>><a href="Formulaire.php">Contact/Formulaire</a></li>
					<li <?php if($page == "repertoire.php"){echo 'class="active"';} ?>><a href="repertoire.php">Repertoire</a></li>
			<?php
			if ($_SESSION['con'] == 0) {
			?>
					<li <?php if($page == "signin.php"){echo 'class="active"';} ?>><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
			<?php
			} else {
			?>
			<li <?php if($page == "signout.php"){echo 'class="active"';} ?>><a class="btn" href="signout.php">SIGN OUT</a></li>
			<?php
			}
	}
}

function footer() {
echo <<<'EOT'
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>(+33)6 66 66 66 66<br>
								<a href="mailto:#">cedric.klein75003@gmail.com</a><br>
								<br>
								666 rue des innocents 75666 Paris FRANCE
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">own casting</h3>
						<div class="widget-body">
							<p> I am the bone of my sword<br>
								Steel is my body and fire is my blood<br>
								I have created over a thousand blades<br>
								Unknown to Death,<br>
								Nor known to Life.<br>
								Have withstood pain to create many weapons<br>
								Yet, those hands will never hold anything<br>
								So as I pray, Unlimited Blade Works. </p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Cédric Klein. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>

EOT;
	
}

?>