<?php

include("./../Model/ModelParametres.php");
//include("./../Model/ModelCookies.php");

$pseudo = $_POST['pseudo'];
$ancienMotDePasse = $_POST['oldPass'];
$ancienMotDePasseHash = md5($ancienMotDePasse);		// Hash with md5 algorithm
$nouveauMotDePasse = $_POST['newPass'];
$nouveauMotDePasseHash = md5($nouveauMotDePasse);		// Hash with md5 algorithm
//$pseudoByCookie = get_data_Cookies("PolyHeroesName");

$validePseudo = false;
$valideOldMDP = false;
$valideNewMDP = false;

	// Compare the pseudo of the form with all nomJoueur in the BD
	include("./../Model/ModelConnection.php");
	$isPlayer = get_userName($pseudo);	
	$validePseudo = false;
	$valideOldMDP = false;
	$valideNewMDP = false;

	if (!$isPlayer)	// The pseudo give by the user is not in the BD
	{
		$validePseudo = $isPlayer;
		$valideOldMDP = false;
		$valideNewMDP = false;
		header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);
	}
	elseif($isPlayer == $pseudo AND gettype($isPlayer) != NULL);	
	{
		
		$passWordIsGood = get_not_userPassWord($pseudo,$ancienMotDePasseHash);
		
		if($passWordIsGood == "")	// The pseudo is good but the password is not
		{
			$validePseudo = $isPlayer;
			$valideOldMDP = false;
			$valideNewMDP = false;
			header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);

		}
		elseif($passWordIsGood == $ancienMotDePasseHash)	// Pseudo and password are good
		{
			$validePseudo = true;
			$valideOldMDP = true;
			
			changePassword($isPlayer,$nouveauMotDePasseHash);
			
			$valideNewMDP = true;
			header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);
		}
	}
		


?>