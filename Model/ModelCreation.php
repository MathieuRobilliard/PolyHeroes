
<?php
/*
* Insert a new character in the BD, and know his id.
*@param $name The name of the character, decided by the user_error
*@return $idPersonnage The id of the character just insert.
*/
function createCharacter($name, $pvMax)
		{
			try 
			{
				include("model.php");
				$sql = "INSERT INTO personnage (nomPersonnage, pvMax) VALUES(?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($name, $pvMax));
				return $pdo->lastInsertId();
				
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
				$sql = "INSERT INTO possede (idPersonnage, idEquipement) VALUES(?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($idPersonnage,$idEquipement));
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

function createNewSauvegarde($idJoueur, $idAventure, $idPersonnage, $pvMax)
		{
			try 
			{
				include("model.php");
				$sql = "INSERT INTO sauvegarde (idJoueur, idAventure, idPersonnage, page, pvActuels) VALUES(?, ?, ?, ?, ?)";                       
				// Preparation de la requete
				$req = $pdo->prepare($sql);
				// execution de la requete
				$req->execute(array($idJoueur, $idAventure, $idPersonnage, 0, $pvMax));
				
			} 
			catch (PDOException $e) {
				echo $e->getMessage();
				die("<br /> Erreur dans la BDD ");
			}
		}	

function get_idJoueur($nomJoueur)
		{
			try 
			{
				include("model.php");
				$sql = "SELECT idJoueur FROM joueurs WHERE nomJoueur = '$nomJoueur'";                       
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

