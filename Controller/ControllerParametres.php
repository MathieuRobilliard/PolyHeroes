<?php

include("./../Model/ModelParametres.php");
//include("./../Model/ModelCookies.php");

$pseudo = $_POST['pseudo'];
$ancienMotDePasse = $_POST['oldPass'];
$nouveauMotDePasse = $_POST['newPass'];
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
		//header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);
	}
	elseif($isPlayer == $pseudo AND gettype($isPlayer) != NULL);	
	{
		
		$passWordIsGood = get_not_userPassWord($pseudo,$ancienMotDePasse);
		
		if($passWordIsGood == "")	// The pseudo is good but the password is not
		{
			$validePseudo = $isPlayer;
			$valideOldMDP = false;
			$valideNewMDP = false;
			header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);

		}
		elseif($passWordIsGood == $ancienMotDePasse)	// Pseudo and password are good
		{
			$validePseudo = true;
			$valideOldMDP = true;
			
			changePassword($isPlayer,$nouveauMotDePasse);
			
			$valideNewMDP = true;
			header('Location: ./../View/ViewParametres.php?validePseudo=' .$validePseudo. '&valideOldMDP='.$valideOldMDP. '&valideNewMDP='.$valideNewMDP);
		}
	}
		


?>