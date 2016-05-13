<?php
include("./../Model/ModelCookies.php");

/* When the user is connected for the first time, a cookie is created */
if(!isset($_COOKIE["PolyHeroesConnected"]))
{
	log_in_Cookies("PolyHeroesConnected", "notConnected" );
	//header('Location: ./../View/HomePage.php');
}	
if(!isset($_COOKIE["PolyHeroesName"]))
{
	log_in_Cookies("PolyHeroesName", "notConnected" );
	//header('Location: ./../View/HomePage.php');
}


/* When a user want to be connected and has the good password. From ControllerConnection Only */
if(isset($_COOKIE["PolyHeroesConnected"]) AND isset($_COOKIE["PolyHeroesName"]))  
{
	if (isset($_GET['validePseudo']) AND isset($_GET['valideMDP']) AND !isset($_GET['firstTime']) )
	{
		if( $_GET['validePseudo'] == true AND $_GET['valideMDP'] == true) 
		{
			$validePseudo = $_GET['validePseudo'];
			$valideMDP = $_GET['valideMDP'];
			$firstTime = true;
			if(isset($_GET['pseudoBD'])) 
			{
				$pseudo = $_GET['pseudoBD'];
				log_in_Cookies("PolyHeroesConnected", "connected" );
				log_in_Cookies("PolyHeroesName", $pseudo );
				log_out_Cookies("PolyHeroesCharacter");
				header('Location: ./../View/HomePage.php?validePseudo=' .$validePseudo. '&valideMDP='.$valideMDP. '&firstTime=' .$firstTime);
			}
			/*else 
			{
				log_in_Cookies("PolyHeroesConnected", "connected" );
				header('Location: ./../View/ViewConnection.php?validePseudo=' .$validePseudo. '&valideMDP='.$valideMDP. '&firstTime=' .$firstTime);
			}*/
		}
	}	
}


/* When a user want to log out. From header, "Se déconnecter" button only */
if (isset($_GET['logOut']))
{
	if( $_GET['logOut'] == true ) 
	{
		log_out_Cookies("PolyHeroesConnected");
		log_in_Cookies("PolyHeroesName", "notConnected" );
		log_out_Cookies("PolyHeroesCharacter");
		header('Location: ./../View/HomePage.php');
	}
}

/* When a user start an Aventure, to remember the name of the character */
if (isset($_GET['nomPersonnage']))
{
	$nomPersonnage = $_GET['nomPersonnage'];
	log_in_Cookies("PolyHeroesCharacter", $nomPersonnage );
}

?>