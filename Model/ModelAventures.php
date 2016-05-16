

<?php

/*
* Select all adventures in the BD
* @return A PDO object with all the adventures
*/
function selectAventure()
		{
			try 
			{
				include("model.php");
				$sql = "SELECT nomAventure, resumeAventure FROM aventure";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				return $req->fetchAll(PDO::FETCH_OBJ);
				
			} 
			catch (PDOException $e) 
			{
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
	
/*
* Select all adventures in the BD after a search by the user
* @return A PDO object with all the adventures selected
*/	
function selectAventureRecherche($recherche)
		{
			try 
			{
				include("model.php");
				$sql = "SELECT nomAventure, resumeAventure FROM aventure WHERE nomAventure LIKE '%$recherche%'";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				return $req->fetchAll(PDO::FETCH_OBJ);
				
			} 
			catch (PDOException $e) 
			{
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
	
/**
 * Get the id of an aventure if we know her name
 * @return int idAventure
 */
function get_idAventure($nomAventure)
{
	try 
	{
		include("model.php");
		$sql = "SELECT idAventure FROM aventure a WHERE a.nomAventure = '$nomAventure'";                      
		// Preparation de la requete
		$req = $pdo->prepare($sql);
		// execution de la requete
		$req->execute();
		$id = $req->fetch();
		return $id[0];
	} 
	catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("<br /> Erreur dans la BDD ");
	}
}		
		
?>