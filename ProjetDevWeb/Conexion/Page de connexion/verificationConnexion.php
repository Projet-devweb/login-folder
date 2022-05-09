<?php
session_start();
$pseudo=$_POST["pseudo"];
$mdp=$_POST["password"];


if (($handle = fopen("annex1.csv", "r"))) {
    while (($data = fgetcsv($handle, 1000, ";"))) {

        $pass=$data[2];

        $log=$data[0];

        if ($pass==$pseudo && $log==$mdp){
          $role=$data[1];

			$_SESSION["nom"]=$data[0];
	  	$_SESSION["prenom"]=$data[1];
      $_SESSION["login"]=$data[2];
      
      $_SESSION["moyenne"]=$data[4];

    }
  }
    fclose($handle);
}
if ($role=='Ribeiro') {
  header('Location: Etudiant/profilEleve.php');
  exit();
} else if ($role=='Responsable') {
  header('Location: Responsable/profilResponsable.php');
exit();
}
else if ($role=='Admin') {
  header('Location: Etudiant/profilAdmin.php');
exit();
}

header('Location: PageConnexion.php?error=wrong');



?>
