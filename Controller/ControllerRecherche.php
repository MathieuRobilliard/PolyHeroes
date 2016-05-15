<?php

$recherche = htmlspecialchars($_POST['recherche']);
header('Location: ./../View/ViewAventures.php?recherche=' .$recherche);

?>