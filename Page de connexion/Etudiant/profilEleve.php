<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Consultation</title>
        <script type="text/javascript" src="app.js"></script>
        <link href="profilEleve.css" rel="stylesheet">
    </head>
    <body>
    <nav id="navbar">
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Develop</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>
    
</ul>

</nav>


<div id="profil" class="card-container">
	<img class="round" src="sanspp.png" alt="user" />
    
    <input type='file' name='' id="file" accept="image/*">
    <label for="file">Edit Pic</label>
	<h3><?php echo $_SESSION['nom']." ".$_SESSION['prenom'];?></p></h3>
	<h6>New York</h6>
	<p>User interface designer and <br/> front-end developer</p>

</div>




<?php echo "Votre moyenne générale est : ". $_SESSION['moyenne'];?></p>




    </body>
</html>
