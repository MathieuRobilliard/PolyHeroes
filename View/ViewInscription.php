<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>

<div id="connection">
	<p>Vous voullez vous inscrire? Pour cela, entrez un pseudo et un mot de passe:</p>
	<form method="post" action="../Controller/ControllerInscription.php">
    <p>
       <label for="pseudo">Votre pseudo :</label>
       <input type="text" name="pseudo" />
       <br />
       <label for="pass">Votre mot de passe :</label>
       <input type="password" name="pass"/>
    </p>
    <input type="submit" value="S'inscrire" ></code>
	</form>	
		
	<?php
	if (isset($_GET['noValidePseudo'])) 
	{
		if($_GET['noValidePseudo'] == true) 
		{
			?> <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ce pseudo n'est pas disponible, veuillez en choisir un autre.</div> <?php
		} 
	}
	
	if (isset($_GET['accountCreated'])) 
	{
		if( $_GET['accountCreated'] == true) 
		{
			?> <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Votre compte à bien été crée! Essayez de vous connecter! </div> <?php
		} 
	}
	?>

</div>

<?php include("footer.php"); ?>