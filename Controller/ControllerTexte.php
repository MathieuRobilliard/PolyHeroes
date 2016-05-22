<?php

if (isset($_GET['nomAventure']) AND isset($_GET['page'])) 
{
	$page = $_GET['page'];
	
	$nomAventure = $_GET['nomAventure'];
	$json = file_get_contents("./../json/$nomAventure.json");
	$tab_Json = json_decode($json, true);
		
	if (isset($_GET['nomPersonnage']) OR get_data_Cookies("PolyHeroesCharacter") != "notConnected")
	{	

		//Save the current page in the BD
		require('./../Model/ModelAventures.php');
		$idAventure = get_idAventure($nomAventure);
		require('./../Model/ModelPersonnages.php');
		// Test of the origin of the data $nomPersonnage
		if (isset($_GET['nomPersonnage']))
		{
			$nomPersonnage = $_GET['nomPersonnage'];
		}
		elseif (isset($_COOKIE["PolyHeroesCharacter"]))
		{
			$nomPersonnage = get_data_Cookies("PolyHeroesCharacter");
		}
		
		$idPersonnage = get_idCharacterWithName($nomPersonnage);
		$nomJoueur = get_data_Cookies("PolyHeroesName");
		require('./../Model/ModelTexte.php');
		$idJoueur = get_idJoueurWithName($nomJoueur);
		saveThePage($page,$idAventure,$idPersonnage,$idJoueur);	
		
		// To know how many Hp the character has
		$pvActuels = KnowPvActuels($idPersonnage, $idJoueur, $idAventure);
		$pvMax = KnowPvMax($idPersonnage);
		
		if (isset($_GET['perdrePV']))
		{
			$nbPvPerdus = $_GET['perdrePV'];
			perdrePV($nbPvPerdus, $idPersonnage, $idJoueur, $pvActuels);
			header('Location: ./../View/ViewTexte.php?nomAventure=' .$nomAventure. '&idPersonnage='.$idPersonnage. '&page=' .$page);
		}
		
	}

}
	

	

?>