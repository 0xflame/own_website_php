<?php
session_start();
require_once("header_footer.php");
head("sign in");
extract($_POST);
setcookie('rid', '', time()+3600*24*30, null, null, false, true);
setcookie('rpass', '', time()+3600*24*30, null, null, false, true);
if (isset($login))
	if ($remember == "on") {
		setcookie('rid', $login, time()+3600*24*30, null, null, false, true);
		setcookie('rpass', $pass, time()+3600*24*30, null, null, false, true);
	}
?>
<header id="head" class="secondary"></header>
	<!-- container -->
	<div class="container">

		<?php
		require_once("set_path.php");
		put_path();
		?>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="text-center text-muted">Sign in to your account</h3>
							<p class="text-center text-muted">Lorem ipsum dolor sit amet, <a href="signup.html">Register</a> adipisicing elit. Quo nulla quibusdam cum doloremque incidunt nemo sunt a tenetur omnis odio. </p>
							<hr>
							
							<form method="POST" action="#">
								<div class="top-margin">
									<label>Username/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="login" placeholder="toto@tata.com" <?php if (isset($_COOKIE['rid'])) echo "value=\"".$_COOKIE['rid']."\"" ?>>
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="pass" placeholder="yolo" <?php if (isset($_COOKIE['rpass'])) echo "value=\"".$_COOKIE['rpass']."\"" ?>>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										
										<?php
										if (isset($login)){
											if($login == "toto@tata.com" && $pass == "yolo") {
												echo "<p class='text-muted'>utilisateur authentifié</p>";
												$_SESSION['con'] = 1;
											}
											else
												echo "<p class='text-muted'>identifiant/mot de passe éronné</p><b><a href=''>Forgot password?</a></b>";
										} else
											echo "<b><a href=''>Forgot password?</a></b>";
										?>
										<br>
										<input type="checkbox" name="remember" value="on" /><span class='text-muted'> se souvenir de moi</apan>
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign in</button>
									</div>
								</div>
							</form>
							
							
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
<?php
require_once("header_footer.php");
footer();
?>