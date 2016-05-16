
<?php
include("./../Model/ModelCookies.php");

/**
* This function select all the users in the BD.
* @return A PDO object with all the users selected
*/	
function get_All_Users()
		{
			try 
			{
				include("model.php");
				$sql = "SELECT nomJoueur, mdpJoueur FROM joueurs";                      
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				return $req->fetchAll(PDO::FETCH_OBJ);
				
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
function get_not_userName($nomJoueur)
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

/**
* This function seek in the BD if a password exist for a user name.
* @param $nomJoueur The name of player we want to compare the password
* @param $motDePasse String the password we want to know if it is right
* @return $id[0] the password if it exist, NULL else
*/	
function get_not_userPassWord($nomJoueur, $motDePasse)
{
	try 
		{
			include("model.php");
				$sql = "SELECT mdpJoueur FROM joueurs WHERE nomJoueur = '$nomJoueur' AND mdpJoueur = '$motDePasse'";                      
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
