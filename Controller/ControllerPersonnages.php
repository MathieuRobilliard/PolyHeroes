<?php


	if(get_data_Cookies("PolyHeroesName") != "notConnected")
	{	
		$pseudo = get_data_Cookies("PolyHeroesName");
		
		if (isset($_GET['nomAventure'])) 
		{
			$nomAventure = $_GET['nomAventure'];
			$idAventure = get_idAventure($nomAventure);

			$idJoueur = get_idJoueur($pseudo);		// !!!! Casse non respectée, plusieurs id peuvent être renvoyées -- FAIT

			$tab_Sauvegarde = get_AllSVG($idJoueur,$idAventure);
			
			//$idPersonnage = get_idCharacter($idJoueur,$idAventure);
			
		}
	}
	else {
		header('Location: ./../View/HomePage.php');
	}
				