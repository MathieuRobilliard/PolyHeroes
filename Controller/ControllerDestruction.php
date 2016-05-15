<?php

include("./../Model/ModelParametres.php");

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['pass'];
$motDePasseHash = md5($motDePasse);		// Hash with md5 algorithm

// Compare the pseudo of the form with all nomJoueur in the BD
	include("./../Model/ModelConnection.php");
	$isPlayer = get_userName($pseudo);
	
	if (!$isPlayer)	// The pseudo give by the user is not in the BD
	{
		$validePseudo = $isPlayer;
		$valideMDP = false;
		header('Location: ./../View/ViewParametres.php?validePseudoDestruction=' .$validePseudo. '&valideMDPDestruction='.$valideMDP);
	}
	elseif($isPlayer == $pseudo AND gettype($isPlayer) != NULL);	
	{
		
		$passWordIsGood = get_not_userPassWord($pseudo,$motDePasseHash);
		if($passWordIsGood == "")	// The pseudo is good but the password is not
		{
			$validePseudo = $isPlayer;
			$valideMDP = false;
			header('Location: ./../View/ViewParametres.php?validePseudoDestruction=' .$validePseudo. '&valideMDPDestruction='.$valideMDP);
		}
		elseif($passWordIsGood == $motDePasseHash)	// Pseudo and password are good
		{
			destructionCompte($isPlayer,$motDePasseHash);
			//include("./../Model/ModelCookies.php");
			log_out_Cookies("PolyHeroesConnected");
			log_out_Cookies("PolyHeroesName");
			$logOut = true;
			header('Location: ./../View/HomePage.php?logOut=' .$logOut);
			}
	}
		


?>