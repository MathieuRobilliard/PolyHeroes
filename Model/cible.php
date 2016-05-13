<?php include("model.php"); ?>

<?php
// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO joueurs (nomJoueur, motDePasse) VALUES(?, ?)');
$req->execute(array($_POST['nomJoueur'], $_POST['motDePasse']));

// Redirection du visiteur vers la page du minichat

header('Location: test.php');

?>