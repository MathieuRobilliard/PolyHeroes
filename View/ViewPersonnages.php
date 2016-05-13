<?php include("header.php"); ?>
<?php include("menu-left.php"); ?>
<?php require_once("./../Model/ModelPersonnages.php"); ?>

<!-- LIST OF CHARACTERS FOR EACH ADVENTURE -->
<?php
require("./../Model/ModelAventures.php");
include("./../Controller/ControllerPersonnages.php");

?> <div class="row"> <?php
if(isset($_COOKIE["PolyHeroesName"]))
	{
		list_Personnages($tab_Sauvegarde,$nomAventure);
	}
?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail" id="listThings">
			<div class="caption">
					<p><a href="ViewCreation.php?nomAventure=<?php echo $nomAventure ?>" class="btn btn-primary" role="button">Créer un personnage</a></p>
			</div>
		</div>
	</div>
</div>

<?php include("footer.php");

function list_Personnages($tab_Sauvegarde,$nomAventure) 
{
    foreach ($tab_Sauvegarde as $tS) {
        $page = $tS->page;
        $pvActuels = $tS->pvActuels;
		$idPersonnage = $tS->idPersonnage;
		$nomPersonnage = get_nameCharacter($idPersonnage);
		$tab_Equipements = get_allEquipement($idPersonnage);
        ?>
		  <div class="col-sm-6 col-md-4">
			<div class="thumbnail" id="listThings">
			  <div class="caption">
				<h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nom: <?php echo($nomPersonnage); ?> </h3>
				<p><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> PV actuels: <?php echo($pvActuels); ?> </p>
				<p><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Liste des pouvoirs: <?php echo("Pas de pouvoirs"); ?></p>
				
				<?php foreach ($tab_Equipements as $tE)
				{
					$idEquipement = $tE->idEquipement;
					$nomEquipement = get_nameEquipement($idEquipement); ?>
					<p><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Equipement: <?php echo($nomEquipement); ?></p> <?php
				} ?>
				<p><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Progression: page <?php echo($page); ?> </p>
				<p><a href="ViewTexte.php?page=<?php echo $page ?>&nomAventure=<?php echo $nomAventure ?>&nomPersonnage=<?php echo $nomPersonnage ?>" class="btn btn-primary" role="button">Reprenez l'aventure!</a></p>
			  </div>
			</div>
		  </div>
		<?php
    }
}  ?>

<?php include("footer.php"); ?>
