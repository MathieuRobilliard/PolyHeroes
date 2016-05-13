<?php 

$accountCreated = false;
$noValidePseudo = false;

$pseudo = $_POST['pseudo'];
$motDePasse = $_POST['pass'];

include("./../Model/ModelInscription.php");
$isPlayer = get_not_users($pseudo);

if ($isPlayer != "")
{
	$noValidePseudo = true;
	header('Location: ./../View/ViewInscription.php?noValidePseudo=' .$noValidePseudo);
}
elseif($isPlayer == "")
{
	$motDePasseHash = md5($motDePasse);	// md5 has low security
	inscription($pseudo,$motDePasseHash);
	$accountCreated = true;
	header('Location: ./../View/ViewInscription.php?accountCreated=' .$accountCreated);	
}

//header('Location: ./../View/ViewInscription.php?noValidePseudo=' .$noValidePseudo);	


?>