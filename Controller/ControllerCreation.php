
<?php
$idAventure = $_GET['idAventure'];
include("./../Model/ModelCreation.php");
	
$name = $_POST['name'];
echo $name;
echo $_POST['weapons'];

//$idPersonnage = createCharacter($name);

//$weapon = $_POST['weapon$compteurWeapons'];
//$idEquipement = get_idEquipement($weapon);
//aNewWeapon($idPersonnage,$idEquipement);

//header('Location: ./../View/ViewTexte.php?idAventure=' .$idAventure. '&amp;page=0');
/*<a href="ViewTexte.php?page=<?php echo $page ?>&nomAventure=<?php echo $nomAventure ?>&nomPersonnage=<?php echo $nomPersonnage ?>" class="btn btn-primary" role="button">Reprenez l'aventure!</a>	*/	
?>