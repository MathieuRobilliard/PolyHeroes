<?php


	if(get_data_Cookies("PolyHeroesName") != "notConnected")
	{	
		$pseudo = get_data_Cookies("PolyHeroesName");
		
		if (isset($_GET['nomAventure'])) 
		{
			$nomAventure = $_GET['nomAventure'];
			require("./../Model/ModelAventures.php");
			$idAventure = get_idAventure($nomAventure);

			$idJoueur = get_idJoueur($pseudo);		// !!!! Casse non respectée, plusieurs id peuvent être renvoyées -- FAIT

			if (isset($idJoueur) AND isset($idAventure)) 
			{
				$tab_Sauvegarde = get_AllSVG($idJoueur,$idAventure);
			}
			
			$idPersonnage = get_idCharacter($idJoueur,$idAventure);
			$nomPersonnage = get_nameCharacter($idPersonnage);
		}
	}
	else {
		header('Location: ./../View/HomePage.php');
	}
				