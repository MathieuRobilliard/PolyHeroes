<?php
include("./../Controller/ControllerCookies.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PolyHeroes</title>

    <!-- CSS LINKS -->
    <link href="../css/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/bootstrap-3.3.6-dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="../css/style.css" />
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  
  <body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	
	
<!-- CODE START HERE -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" id="navbar-header-important">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	   
	    <?php // Random number, to have a random logo-PolyHeroes
	    $randNumber = rand(1,7);
		?>
		<a class="pull-left" href="./../View/HomePage.php">
			<?php echo "<img src='./../img/logo-PolyHeroes1' .$randNumber alt='Home Page' id='logo-PolyHeroes'>" ?>
			<?php //echo '<img src="./../img/logo-PolyHeroes' .$randNumber. '" alt="Home Page" id="logo-PolyHeroes">' ?>
		</a> 
		
	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" id="navbar-right-important">
	  
		  <form id="navbar-left-important" class="navbar-form navbar-left" method="post" action="../Controller/ControllerRecherche.php?">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Cherchez une aventure" name="recherche">
			</div>
			<input type="submit" class="btn btn-default" value="Chercher" >
		  </form> 
		  
		<!-- Which button are hidden when the user is connected or not -->
        <?php 
			if (get_data_Cookies("PolyHeroesConnected") == "connected")
			
			{
				?> 
				<a id="header-btn" href="./../View/ViewParametres.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Paramètres</a> 
				<a id="header-btn" href="./../View/HomePage.php?logOut='true'" class="btn btn-primary" role="button">Se déconnecter</a> 
				<?php
			}
			else /*if (get_data_Cookies("PolyHeroesConnected") == "notConnected" OR get_data_Cookies("PolyHeroesName") == "notConnected")*/
			{
				?>
				<a id="header-btn" href="ViewConnection.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Se connecter</a>
				<a id="header-btn" href="ViewInscription.php" class="btn btn-primary" role="button"><span class=" glyphicon glyphicon-home" aria-hidden="true"></span> S'inscrire</a>
				<?php
			} ?>
      </ul>
    </div>
	
	
  </div>
</nav>
	
	
	