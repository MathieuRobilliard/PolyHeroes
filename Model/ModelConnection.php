
<?php
include("./../Model/ModelCookies.php");

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
