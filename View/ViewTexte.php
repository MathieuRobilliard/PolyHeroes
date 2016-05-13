<?php include("header.php"); 
	  include("menu-left.php"); ?>
	  
<?php include("./../Controller/ControllerTexte.php"); ?>


<section id=texteAventure>
	<?php 
		
		echo( $tab_Json[$page]);
	?>
</section>

<?php include("footer.php"); ?>