<?php
session_start();
$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	};
 

$id = $_GET['id']; // $id is now defined



mysqli_query($conn,"DELETE FROM living_prices WHERE id='".$id."'");
mysqli_close($conn);
header("Location: admin_all.php");
	
	
?>