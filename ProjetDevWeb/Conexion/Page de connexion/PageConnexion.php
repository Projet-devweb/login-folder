<?php
session_start();
?>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Page de Connexion</title>
  <link rel="stylesheet" href="PageConnexion.css">
  <script src="script.js"></script>
</head>
<body>


  <div class="container">

    <div class="logo">
      <img class="image" src="logo.png">
    </div>

    <form action="verificationConnexion.php" method="post">
      <h1>Bienvenue</h1>
      <input type="text" name="pseudo" placeholder="Email" required><br>
      <input type="password" name="password" placeholder="Mot de passe" required><br>
      <input type="submit" value="Connexion"><br>
    </form>


    <?php
  	if (isset($_POST["OUT"])){
  		session_destroy();
  	}
  	?>

</body>
</html>
