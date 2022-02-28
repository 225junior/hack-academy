<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Hack-Academie | Login</title>

	<!-- Favicons -->
	<link href="assets/images/logo/icon.ico" rel="icon">
	<link href="assets/images/logo/icon.ico" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">

</head>

<body>
	<!--MAIN CONTENT -->
	<div id="login-page">
		<div class="container">

			<!-- message flash -->
			<div class="col-md-4 mt col-md-offset-4">
			<?php
			if (isset($_SESSION['auth']['error'])) {
				echo '<div class="alert alert-danger"><b>Erreur! ' . $_SESSION['auth']['error'] . '</b> </div>';
				unset($_SESSION['auth']['error']);
			}
			?>
			</div>
			<!-- fin message flash -->


			<form class="form-login" method="POST" action="../Controllers/UserController.php">
				

				<h2 class="form-login-heading">Hack Academie</h2>
				<div class="text-center">
					<img src="assets/images/logo/logo.png" class="img text-center" width="150px" alt="">
				</div>

				<div class="login-wrap">

					<input type="text" autocomplete="off" required name="pseudo" class="form-control" placeholder="pseudo" autofocus>

					<input type="password" name="password" required class="mt form-control" placeholder="Mot de passe">

					<input class="btn btn-theme mt btn-block" name="login" type="submit" value="Connexion">
					<hr>

					<div class="registration">Pas encore de compte?<br/>
						<a href="views/register.php">Créer un compte</a>
					</div>

				</div>
			</form>
		</div>
	</div>
	<!-- js placed at the end of the document so the pages load faster -->
	<script src="assets/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
