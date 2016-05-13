

<?php

function inscription($pseudo, $motDePasseHash)
		{
			try 
			{
				// Insertion du nouvel utilisateur à l'aide d'une requête préparée, permet d'éviter l'injection de requêtes SQL
				include("model.php");
				$sql = "INSERT INTO joueurs (nomJoueur, mdpJoueur, adminJoueur) VALUES(?, ?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($pseudo, $motDePasseHash, 0));
				
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
		
function get_not_users($nomJoueur)
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
				return $id[0];	// If only one data to return
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			die("<br /> Erreur dans la BDD ");
		}
}


?>