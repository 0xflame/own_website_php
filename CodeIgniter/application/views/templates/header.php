<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title> <?php echo $title ?> - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="<?php echo asset_url(); ?>images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="<?= asset_url(); ?>css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/main.css">

	<!-- my css style -->
	<link rel="stylesheet" href="<?php echo css_url(); ?>style.css">
	
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
				<a class="navbar-brand" href="<?=site_url("");?>"><img src="<?= asset_url();?>images/logo.png" alt="Progressus HTML5 template" height="50"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
                <?php
                $page = $_SERVER['REQUEST_URI'];
                $page = str_replace("/CodeIgniter/index.php/Myclass/view/", "",$page);
                ?>
                    <li <?php if($page == "home"){echo 'class="active"';} ?>><a href="<?=site_url("");?>">Home</a></li>
                    <li <?php if($page == "about"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/about");?>">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php if($page == "sidebar-left.php"){echo 'class="active"';} ?>><a href="<?= site_url("Myclass/index/sidebar-left");?>">Left Sidebar</a></li>
                            <li <?php if($page == "sidebar-right.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/sidebar-right");?>">Right Sidebar</a></li>
                            <li <?php if($page == "Item3.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/Item3");?>">Les Poemes</a></li>
                            <li <?php if($page == "Item5.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/Item5");?>">Les Impressionnistes</a></li>
                            <li <?php if($page == "Item6.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/Item6");?>">Modeles UML</a></li>
                            <li <?php if($page == "apport.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/Rapport");?>">Rapport de suivi en entreprise</a></li>
                            <li <?php if($page == "table.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/table");?>">Table CD audio</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">JS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li <?php if($page == "jeu.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/jeu");?>">jeu</a></li>
                            <li <?php if($page == "fondec.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/fondec");?>">fondec couleur</a></li>
                            <li <?php if($page == "table_trigo.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/table_trigo");?>">table trigonometrique</a></li>
                        </ul>
                    </li>
                    <li <?php if($page == "Formulaire.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/Formulaire");?>">Contact/Formulaire</a></li>
                    <li <?php if($page == "repertoire.php"){echo 'class="active"';} ?>><a href="<?=site_url("Myclass/index/repertoire");?>">Repertoire</a></li>
                    <?php
                        if (!isset($_SESSION['con']) || $_SESSION['con'] == 0) {
                    ?>
                    <li <?php if($page == "signin.php"){echo 'class="active"';} ?>><a class="btn" href="<?=site_url("Myclass/index/signin");?>">SIGN IN / SIGN UP</a></li>
                    <?php
                        } else {
                    ?>
                    <li <?php if($page == "signout.php"){echo 'class="active"';} ?>><a class="btn" href="<?=site_url("Myclass/index/signout");?>">SIGN OUT</a></li>
                    <?php
                        }
                    ?>
                </ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->