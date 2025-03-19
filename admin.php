 <?php
if ($_SERVER['REQUEST_METHOD']== "POST") {
$name=$_REQUEST['name'];
$prix=$_REQUEST['prix'];
$des=$_REQUEST['desc'];
$img=$_FILES['image'];
$image=$img['tmp_name'];

$desti= 'C:/xampp/htdocs/projetJPO/images/';
$imgname= uniqid() . '_' . $img['name'];
$dest= $desti. $imgname; move_uploaded_file($image, $dest);
$imgpatt= realpath($dest);
$imgpattt= str_replace('\\','/' , $imgpatt);
$imgpat= substr($imgpattt, 26);

echo 'vous avez saisie les valeurs suivantes';
echo $name ; 
echo $prix ;
echo $des ;
echo $imgpat;

$servername="localhost";
$username="borel";
$password="";
$bdname="lmk";




try {
  $conn = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO médicament(nom_med, image, des, prix) 
  VALUES ('$name','$imgpat', '$des', '$prix')";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $name. "<br>" . $e->getMessage();
}

$conn = null;

	
}

if ($_SERVER['REQUEST_METHOD']== "GET") {
$name=$_REQUEST['name'];
$tel=$_REQUEST['contact'];
$spe=$_REQUEST['spe'];
$hop=$_REQUEST['hopital'];


$servername="localhost";
$username="borel";
$password="";
$bdname="lmk";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$bdname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="INSERT INTO specialiste(nomsp, contact, specialite, hopital) 
  VALUES ('$name','$tel', '$spe', '$hop')";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<h1> NOUVEAU SPECIALISTE ENREGISTRÉ </h1>";
} catch(PDOException $e) {
  echo $name. "<br>" . $e->getMessage();
}

$conn = null;

}

?>