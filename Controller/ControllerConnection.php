
<?php

include("./../Model/ModelConnection.php");
/*$reponse = get_All_Users();*/

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['pass'];
$motDePasseHash = md5($motDePasse);		// Hash with md5 algorithm
$validePseudo = false;
$valideMDP = false;

// Compare the pseudo of the form with all nomJoueur in the BD
$isPlayer = get_not_userName($pseudo);

if (!$isPlayer)	// The pseudo give by the user is not in the BD
{
	$validePseudo = $isPlayer;
	$valideMDP = false;
	header('Location: ./../View/ViewConnection.php?validePseudo=' .$validePseudo. '&valideMDP='.$valideMDP);
}
elseif($isPlayer == $pseudo)	
{
	$passWordIsGood = get_not_userPassWord($pseudo,$motDePasseHash);
	
	if($passWordIsGood == "")	// The pseudo is good but the password is not
	{
		$validePseudo = $isPlayer;
		$valideMDP = false;
		header('Location: ./../View/ViewConnection.php?pseudoBD=' .$pseudo. '&validePseudo=' .$validePseudo. '&valideMDP=' .$valideMDP);

	}
	elseif($passWordIsGood == $motDePasseHash)	// Pseudo and password are good
	{
		$validePseudo = $isPlayer;
		$valideMDP = true;
		header('Location: ./../View/HomePage.php?pseudoBD=' .$pseudo. '&validePseudo=' .$validePseudo. '&valideMDP=' .$valideMDP);
	}
	
}


?>