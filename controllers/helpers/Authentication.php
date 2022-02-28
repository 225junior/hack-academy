<?php
/**
 * Undocumented function
 *
 * @return void
 */
function isloged()
{

	if (isset($_SESSION['auth'])) {
		$nom = $_SESSION['auth']['nom'];
		$prenoms = $_SESSION['auth']['prenoms'];
		$userName = $_SESSION['auth']['userName'];
	} else {
		header('Status: 200');
		header('Location:assets/login.php');
		exit();
	}

}
