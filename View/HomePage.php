<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>

<!-- HOME PAGE TEXT -->
<section id="sectionMain">
	<h2> 
		Bienvenue sur le site de PolyHeroes! 
	</h2>
	
	<?php
	if (isset($_GET['validePseudo']) AND isset($_GET['valideMDP'])) 
	{
		if( $_GET['validePseudo'] == true AND $_GET['valideMDP'] == true) 
		{
			?> <div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Connexion réussie!</div> <?php
		} 
	}
	?>
	
	<p>Connaissez-vous les livres dont vous êtes le héros? Ce site web est basé sur le même principe!</p>
	
	<h3>
		<em>Concept</em>:
	</h3>
	<p>
		Le concepte consiste, après avoir choisi une aventure, à créer un personnage, puis le faire avancer 
		dans l'histoire en choisissant vous mêmes les actions prises par votre héros. Chaque choix vous emmène sur
		une nouvelle page, et l'aventure continue!
	</p>
	
	<h3>
		<em>Comment jouer?</em>
	</h3>
	<p>
		Pour jouer, rien de plus simple! Créez un compte (c'est simple et gratuit!), puis choisissez une aventure.
		Vous serez alors en mesure de choisir un nom à votre personnage, quelques aptitudes et équipements, et 
		de lancer un dé virtuel pour obtenir vos points de vies. 
	</p>
	<p>
		Tout sera géré par notre site: vos points de vies restants, votre équipement, et votre progression.
	</p>
	
</section>


<?php include("footer.php"); ?>
