<?php
	$nom=$_REQUEST["search"];
	print("recherche... <br>");

		echo $nom;

$servername = "localhost";
$username = "borel";
$password = "";
$bdname="lmk";
  -
$conn=mysqli_connect($servername, $username, $password, $bdname);
if (!$conn) {
	die("fail" . mysqli_connect);
	
}


$sql= " SELECT * FROM médicament WHERE nom_med LIKE '%$nom%'";

$resultat= mysqli_query($conn, $sql);
if (mysqli_num_rows($resultat) > 0) {

	while ($ligne = mysqli_fetch_assoc($resultat)) {
		$imge= $ligne["image"];
		$nomn=  $ligne["nom_med"];
		$des= $ligne["des"];
		$prix= $ligne["prix"]; 
	}
}else {echo "0 resultat";}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?=$nom ?>
</title>
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900|Exo:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="style2.css"/>
	<script src="js/swipe-menu.js" async></script>
	<style type="text/css">
		h2 {font-size: 30px; font-family: algerian;}
	</style>
</head>


<body>

<div id="second-block">
		
		<form method="post" id="contact-form" enctype="multipart/form-data">
			<div class="form-header">
				<h2>RESULTAT</h2>
				<p>disponibilite</p>
			</div>
			<img src="<?=$imge ?>">
				<p><h3></h3></p>
				</form>

				<h2><?=$nomn ?></h2>
		<h2>le produit est decrit comme : <?=$des ?> </h2>
		<h2>il coute <?=$prix ?> F et est disponible dans toutes les pharmacies</h2>
	</div>
	


			</div>

		

		

	<footer id="footer">
		<p id="rights">All rights reserved &copy; HAIBONWA RIBEGA 2024</p>
	</footer>
</div>

	


</body>
</html>