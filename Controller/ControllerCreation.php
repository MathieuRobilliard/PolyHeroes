
<?php
include("./../Model/ModelCreation.php");

$nomAventure = $_GET['nomAventure'];
include("./../Model/ModelAventures.php");
$idAventure = get_idAventure($nomAventure);

$namePersonnage = $_POST['name'];
$idWeapon = $_POST['weapons'];
$nomUser = $_POST['userName'];
$pvMax = 20; 	// A random will be better

// Test if the $nomUser is in the BD
include("./../Model/ModelConnection.php");
$isPlayer = get_not_userName($nomUser);
if ($isPlayer == $nomUser)
{
	$idJoueur = get_idJoueur($nomUser);
	$idPersonnage = createCharacter($namePersonnage, $pvMax);

	aNewWeapon($idPersonnage,$idWeapon);
	createNewSauvegarde($idJoueur, $idAventure, $idPersonnage, $pvMax);

	header('Location: ./../View/ViewTexte.php?page=0&nomAventure=' .$nomAventure. '&nomPersonnage=' .$namePersonnage);
}
else
{
	$valideName = false;
	header('Location: ./../View/ViewCreation.php?validePseudo=' .$valideName);
}



?>