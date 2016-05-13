
<?php

include("./../Model/ModelConnection.php");
/*$reponse = get_All_Users();*/

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['pass'];
$validePseudo = false;
$valideMDP = false;

// Compare the pseudo of the form with all nomJoueur in the BD
$isPlayer = get_not_userName($pseudo);

if ($isPlayer == "")	// The pseudo give by the user is not in the BD
{
	$validePseudo = false;
	$valideMDP = false;
	header('Location: ./../View/ViewConnection.php?validePseudo=' .$validePseudo. '&valideMDP='.$valideMDP);
}
elseif($isPlayer == $pseudo);	
{
	$passWordIsGood = get_not_userPassWord($pseudo,$motDePasse);
	
	if($passWordIsGood == "")	// The pseudo is good but the password is not
	{
		$validePseudo = true;
		$valideMDP = false;
		header('Location: ./../View/ViewConnection.php?pseudoBD=' .$pseudo. '&validePseudo=' .$validePseudo. '&valideMDP=' .$valideMDP);

	}
	elseif($passWordIsGood == $motDePasse)	// Pseudo and password are good
	{
		$validePseudo = true;
		$valideMDP = true;
		header('Location: ./../View/HomePage.php?pseudoBD=' .$pseudo. '&validePseudo=' .$validePseudo. '&valideMDP=' .$valideMDP);
	}
	
}


?>