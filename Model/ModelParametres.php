<?php

function changePassword($pseudo, $nouveauMotDePasse)
		{
			try 
			{
				// Insertion du nouvel utilisateur à l'aide d'une requête préparée, permet d'éviter l'injection de requêtes SQL
				include("model.php");
				$sql = "UPDATE joueurs SET idJoueur=idJoueur, nomJoueur=nomJoueur, mdpJoueur='$nouveauMotDePasse', adminJoueur=adminJoueur WHERE nomJoueur='$pseudo'";                   
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}

/**
* This function seek in the BD if a name exist.
* @param $nomJoueur The name of player we want to know if he is in the BD
* @return $id[0] is equal with $nomJoueur or it is empty
*/
function get_userName($nomJoueur)
{
	try 
		{
			include("model.php");
				$sql = "SELECT nomJoueur FROM joueurs WHERE nomJoueur = '$nomJoueur'";                      
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				$id = $req->fetch();
				return $id[0];	// If only one data is return
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			die("<br /> Erreur dans la BDD ");
		}
}

function destructionCompte($nomJoueur, $mdpJoueur)
{
	try 
	{	
		include("model.php");
		$sql = "DELETE FROM joueurs WHERE nomJoueur = '$nomJoueur' AND mdpJoueur = '$mdpJoueur'";                      
		// Preparation de la requete
		$req = $pdo->prepare($sql);
		// execution de la requete
		$req->execute();
	} 
	catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("<br /> Erreur dans la BDD ");
	}
}			
		
		
?>