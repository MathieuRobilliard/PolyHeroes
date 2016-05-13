
<?php

function createCharacter($name)
		{
			try 
			{
				include("./../Model/model.php");
				$sql = "INSERT INTO personnage (nomPersonnage, pvMax) VALUES(?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($name, 20));
				return $db->lastInsertId('idPersonnage');
				
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
		
		
function aNewWeapon($idPersonnage,$idEquipement)
		{
			try 
			{
				include("model.php");
				$sql = "INSERT INTO possède (idPersonnage, idEquipement) VALUES(?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($idPersonnage,$idEquipement));
				return $req->fetchAll(PDO::FETCH_OBJ);
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}
		
function get_AllNameEquipement()
		{
			try 
			{
				include("model.php");
				$sql = "SELECT nomEquipement FROM equipement";                       
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
		
function get_idEquipement($nomEquipement)
		{
			try 
			{
				include("model.php");
				$sql = "SELECT idEquipement FROM equipement WHERE nomEquipement = '$nomEquipement'";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				$id = $req->fetch();
				return $id[0];
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}		
		
function get_resumeEquipement($nomEquipement)
		{
			try 
			{
				include("model.php");
				$sql = "SELECT resumeEquipement FROM equipement WHERE resumeEquipement = '$resumeEquipement'";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute();
				$id = $req->fetch();
				return $id[0];
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}		
		

?>

