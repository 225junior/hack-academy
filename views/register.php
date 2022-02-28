<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Hack-Academie | Register</title>

	<!-- Favicons -->
	<link href="../assets/images/logo/icon.ico" rel="icon">
	<link href="../assets/images/logo/icon.ico" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--external css-->
	<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/style-responsive.css" rel="stylesheet">

</head>

<body>
	<!-- MAIN CONTENT -->
	<div id="login-page">
		<div class="container">

			<form class="form-login" method="POST" action="../Controllers/UserController.php" autocomplete="on">

				<h2 class="form-login-heading">Créez votre compte</h2>
				<div class="login-wrap">

					<label for="nom">Nom</label>
					<input type="text" autocomplete="off" require minlength="3" class="form-control" name="nom" placeholder="Votre Nom de famille" autofocus>

					<label for="prenoms" class="mt">Prenoms</label>
					<input type="text" autocomplete="off" class="form-control" minlength="3" required name="prenoms" placeholder="Vos prénoms">

					<label for="login" class="mt">login</label>
					<input type="text" autocomplete="off" class="form-control" minlength="6" name="user_name" required placeholder="Choisissez un psudonyme">

					<label for="password" class="mt">Mot de passe</label>
					<input type="password" class="form-control" minlength="6" name="password" required placeholder="au moins 6 caractères">


					<input type="submit" class="btn mt btn-theme btn-block" name="register" value="Valider">
					<hr>

					<div class="registration">
						J'ai déja un compte<br /><a href="../">Connectez-vous</a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- js placed at the end of the document so the pages load faster -->
	<script src="../assets/jquery/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>