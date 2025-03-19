<?php
if ($_SERVER['REQUEST_METHOD']== "POST" && $_REQUEST['message']!= "ADMIN" ) {

function Functionp()
{
	$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$object=$_REQUEST['object'];
$message=$_REQUEST['message'];
echo "vous avez saisie les valeurs suivantes:";
echo $name ; 
echo $phone ;
echo $object ;
echo $message ;

$severname="localhost";
$username="borel";
$password="";
$bdname="lmk";
$conn=mysqli_connect($severname, $username, $password, $bdname);
if (!$conn) {
	die("fail" . mysqli_connect);
	
}
echo "connection reussit";
$sql="INSERT INTO contact(nom, phone, object, message) VALUES ('$name','$phone', '$object', '$message')";
if (mysqli_query($conn, $sql)) {
	echo "insertion reussitte";
} else {echo "echec de l'insertion";}


}










} 


?>
