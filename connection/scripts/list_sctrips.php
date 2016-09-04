<?php 

require "../connection.php";

$id = $_POST['id'];

$sql = 'DELETE FROM `market` WHERE id = "'.$id.'"';
if ($conn->query($sql)) {
	# code...
	echo "Deleted";
}
?>