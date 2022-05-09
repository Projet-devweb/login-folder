<?php
session_start();
include('menuEtudiant.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="profilEleve.css">
    </head>
    <body>
		

<div class="card text-white mb-3 gauche" style="max-width: 20rem;">
  <div class="card-header">Note</div>
  <div class="card-body">
    <h4 class="card-title">Votre Moyenne</h4>
    <p class="card-text"><?php echo "Votre moyenne générale est : ". $_SESSION['moyenne'];?></p>
  </div>
</div>

<div class="card text-white mb-3 centre" style="max-width: 20rem;">
  <div class="card-header">COmpte ECTS</div>
  <div class="card-body">
    <h4 class="card-title">Votre Moyenne</h4>
    <p class="card-text"><?php echo "Votre moyenne générale est : ". $_SESSION['moyenne'];?></p>
  </div>
</div>

<div class="card text-white mb-3 droite" style="max-width: 20rem;">
  <div class="card-header">Note</div>
  <div class="card-body">
    <h4 class="card-title">Votre Moyenne</h4>
    <p class="card-text"><?php echo "Votre moyenne générale est : ". $_SESSION['moyenne'];?></p>
  </div>
</div>


    </body>
</html>