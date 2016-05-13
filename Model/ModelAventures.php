

<?php

function selectAventure()
		{
			try 
			{
				include("model.php");
				$sql = "SELECT nomAventure, resumeAventure, fichierJson FROM aventure";                       
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