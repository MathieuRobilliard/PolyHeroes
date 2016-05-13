<?php

function get_JSON($idAventure)
		{
			try 
			{
				include("model.php");
				$sql = "SELECT fichierJson FROM aventure WHERE idAventure = '$idAventure'";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($name, 20));
				return $req->fetchAll(PDO::FETCH_OBJ);
				
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
		
function saveThePage($page,$idAventure,$idPersonnage,$idJoueur)		
{
        try 
        {
			include("model.php");
            $sql = "UPDATE sauvegarde SET idJoueur=idJoueur, idAventure=idAventure, idPersonnage=idPersonnage, page='$page' WHERE idJoueur='$idJoueur' AND idAventure='$idAventure' AND idPersonnage='$idPersonnage'";
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
	
function get_idJoueurWithName($nomJoueur)
{
		include("model.php");
		try 
		{
			$sql = "SELECT idJoueur FROM joueurs WHERE nomJoueur = '$nomJoueur'";                      
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