<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>option</title>
	<meta name="viewport" content="initial-scale=1.0, width=device-width"/>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900|Exo:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" type="text/css" href="style2.css"/>
	<script src="js/swipe-menu.js" async></script>
</head>
<body>
<nav id="menu">
	<ul>
		<li><a href="LMK.html">Acueil</a></li>
			<li><a href="spe.html">Rechercher un sepecialiste</a></li>
		<li><a href="#second-block">ADMIN</a></li>
		<li><a href="info.html">A propos</a></li>
		</ul>
</nav>

<div id="container">
	<header id="headers">

		<div id="menu-burger">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
		</div>
		</div>

   
	</header>

	<main id="main-block">
		<h1>HOPITAL REGIONAL</h1>
	
			<form id="search" action="med.php">

		<p class="p"> <input type="search" name="search" placeholder="rechercher"> <input type="submit" value="Rechercher "> </p>
		</form>

			<header id="main-title">
			<h1 id="SPECIALISTES" name="SPECIALISTES">SPECIALISTES</h1>
			<h2> Contactez les pour une consultation specialisée</h2>
		</header>

<div id="tablerop">
<table border="10" style=" margin: 100px 200px 100px 500px;">

<?php

$servername = "localhost";
$username = "borel";
$password = "";
$bdname="lmk";
$conn=mysqli_connect($servername, $username, $password, $bdname);
if (!$conn) {
	die("fail" . mysqli_connect);
	
}
$sql= " SELECT * FROM specialiste WHERE specialite LIKE '%hrak%'";

$resultat= mysqli_query($conn, $sql);
if (mysqli_num_rows($resultat) > 0) {

	while ($ligne = mysqli_fetch_assoc($resultat)) {
		echo "<tr>";

		echo "<td>".$ligne["specialite"]."</td>";
		echo "<td>".$ligne["nomsp"]."</td>";
		echo "<td>".$ligne["contact"]."</td>";
		echo "<td>".$ligne["hopital"]."</td>"; 

		echo "</tr>";
	}
}else {echo " <td> 0 resultat </td> ";}

echo "</table>";

?>


</div>

	<header id="main-title">
			<h1 id="SERVICES" name="SERVICES">SERVICES</h1>
			<h2> Se rendre a HRAK pour prendre rendez-vous</h2>
		</header>

		<div id="tablerop">
		<table border="10" style=" margin: 100px 200px 100px 500px; ">
			<tr>
				<th>SERVICES</th>
				<th>TARIF</th>
				<th>HORAIRES ET JOURS</th>
			</tr>
			<tr>
				<td>CONSUTATION SIMPLE</td>
				<td>MINUMUN 2000F</td>
				<td>TOUT LES JOURS 24/24H</td>
			</tr>
			<tr>
				<td>ECHOGRAPHIE</td>
				<td>7500F</td>
				<td>TOUT LES JOURS 6H-20H</td>
			</tr>
			<tr>
				<td>SEANCE PSYCHOLOGIQUE</td>
				<td>10000F</td>
				<td>LUNDI A VENDREDI 8H-18H</td>
			</tr>
			<tr>
				<td>RADIOGRAPHIE</td>
				<td>MINIMUN 5000F</td>
				<td>TOUT LES JOURS 6H-22H</td>
			</tr>

		</table>

	</main>






  <table>
  	<tr>
  		<td>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20400.556914606957!2d15.032693987295271!3d12.091485001904339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x111961dffe64f061%3A0x3401ea1ec6d54108!2sH%C3%94PITAL%20REGIONAL%20ANNEXE%20DE%20KOUSSERI!5e1!3m2!1sfr!2scm!4v1704381097435!5m2!1sfr!2scm" width="800" height="450" style="border:0; -webkit-box-shadow: 0 6px 10px 0 green, 0 1px 18px 0 green, 0 3px 5px -1px green !important" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></td>
<td><h1 style="font-size: 80px; vertical-align: bottom;" >nous geolocaliser grace á google maps </td>
</tr>
</table>


<div id="second-block">
		
		<form method="post" id="contact-form" action="traitement.php">
			<div class="form-header">
				<h2>Nous contacter</h2>
				<p>Pour plus d'informations ou pour une comande, veillez nous contacter.</p>
			</div>
			<div class="form-block">
				<label>Nom et prenom</label>
				<input type="text" name="name" placeholder="Votre nom" value=""/>
			</div>
			<div class="form-block">
				<label>Numero de telephone</label>
				<input type="tel" name="phone" placeholder="votre numero" value=""/>
			</div>
			<div class="form-block">
				<label>Object</label>
				<select name="object" placeholder="Object du message" value="">
					<option value=""></option>
					<option value="INFORMATION">PLUS D'INFORMATION</option>
					<option value="COMMANDE">COMMANDE</option>


				</select>
				


			</div>
			<div class="form-block">
				<label>Message</label>
				<textarea name="message" placeholder="Votre message"></textarea>
			</div>
			<div class="form-block form-button">
				<p><input type="button" name="send" value="connexion" onclick="admin()"></p>
				<p><input type="submit" name="send" value="Envoyer"/></p>
				<p><h3>By bobo</h3></p>

			</div>
		</form>
	</div>

	<footer id="footer">
		<p id="rights">All rights reserved &copy; HAIBONWA RIBEGA 2024</p>
	</footer>
</div>
</body>
</html>
</body>
</html>