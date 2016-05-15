
<?php
/**
 * 
 *@param 
 *@return 
*/
function get_allSVG($idJoueur,$idAventure)
{
	try 
	{	
		include("model.php");
		$sql = "SELECT * FROM sauvegarde WHERE idJoueur = '$idJoueur' AND idAventure = '$idAventure'";                      
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
 * 
 *@param 
 *@return 
*/
function get_idJoueur($pseudo)
{
		include("model.php");
		try 
		{
			$sql = "SELECT idJoueur FROM joueurs  WHERE nomJoueur = '$pseudo'";                      
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

/**
 * 
 *@param 
 *@return 
*/
function get_nameCharacter($idPersonnage)
{
		include("model.php");
		try 
		{
			$sql = "SELECT nomPersonnage FROM personnage WHERE idPersonnage = '$idPersonnage'";                      
			// Preparation de la requete
			$req = $pdo->prepare($sql);
			// execution de la requete
			$req->execute();
			$name = $req->fetch();
			return $name[0];
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
			die("<br /> Erreur dans la BDD ");
		}
}

function get_idCharacterWithName($nomPersonnage)
{
		include("model.php");
		try 
		{
			$sql = "SELECT idPersonnage FROM personnage WHERE nomPersonnage = '$nomPersonnage'";                      
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

/**
 * 
 *@param 
 *@return 
*/
function get_idCharacter($idJoueur,$idAventure)
{
		include("model.php");
		try 
		{
			$sql = "SELECT idPersonnage FROM sauvegarde WHERE idJoueur = '$idJoueur' AND idAventure = '$idAventure'";                      
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

function get_allEquipement($idPersonnage)
{
	try 
	{	
		include("model.php");
		$sql = "SELECT idEquipement FROM possede WHERE idPersonnage = '$idPersonnage'";                      
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

function get_nameEquipement($idEquipement)
{
	try 
	{	
		include("model.php");
		$sql = "SELECT nomEquipement FROM equipement WHERE idEquipement = '$idEquipement'";                      
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

function supprimerPersonnage($idPersonnage)
{
	try 
	{	
		include("model.php");
		$sql = "DELETE FROM sauvegarde WHERE idPersonnage = '$idPersonnage'";                      
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