<?php

$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "market";

//Create the database connection
$conn = mysqli_connect($servername, $serveruser, $serverpass, $dbname);

// Check connection
if (!$conn){

die("Connection Failed: ". $conn->connect_error);

}

$item_name = $_POST['item_name'];
$priceA = $_POST['priceA'];
$priceB = $_POST['priceB'];
$price_difference = $_POST['price_difference'];


$sql = 'INSERT INTO `market`(`item`, `chandaria`, `nakumatt`, `pricedifference`) VALUES ("'.$item_name.'","'.$priceA.'","'.$priceB.'","'.$price_difference.'")';

if (mysqli_query($conn,$sql)) {
	# code...
	echo "Successful";
}
else
	echo "Error";

?>