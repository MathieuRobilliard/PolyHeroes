

<nav id="menu-left">

    <ul class="nav nav-pills nav-stacked">
		<li><a href="HomePage.php">Accueil</a></li>
		<li><a href="ViewAventures.php">Liste des aventures</a></li>
		<li><a href="ViewQuiSommesNous.php">Qui sommes nous?</a></li>
    </ul>
	
	<?php
	if(isset($_COOKIE["PolyHeroesCharacter"]) AND isset($_GET['page']))
	{
		$nomPersonnage = $_COOKIE["PolyHeroesCharacter"];
		
		//include("ModelPersonnages.php");
		$idPersonnage = get_idCharacterWithName($nomPersonnage);
		$tab_Equipements = get_allEquipement($idPersonnage);
		
		?>
		<ul class="nav nav-pills nav-stacked">
		
			<li>  </li>
			<li> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $nomPersonnage ?> </li>
			<li> <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Vos PV : </li>
			
			<!-- To print the currents Hp of the character -->
			<li> 
				<div class="progress" id="hp-Bar">
				  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $pvActuels ?>" aria-valuemin="0" aria-valuemax="<?php echo $pvMax ?>" style="width: <?php echo ($pvActuels/$pvMax)*100 ?>%;">
					 <?php echo $pvActuels ?> / <?php echo $pvMax ?>
				  </div>
				</div>
			</li>
			
			<?php foreach ($tab_Equipements as $tE)
				{
					$idEquipement = $tE->idEquipement;
					$nomEquipement = get_nameEquipement($idEquipement); ?>
					<p><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <?php echo($nomEquipement); ?></p> <?php
				} ?>
			
		</ul>
		<?php
	}
	?>
	
</nav>