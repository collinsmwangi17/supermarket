<?php
// Declaring database constants
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
else {//echo "Connected Successfully to ". $dbname;
}
// echo "Connected Successfully to ". $dbname;
?>