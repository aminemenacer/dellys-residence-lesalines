<?php

$conn = mysqli_connect('localhost', 'amine', 'test1234', 'dellys' );
session_start();
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	};
 

$id = $_GET['id']; // $id is now defined



mysqli_query($conn,"DELETE FROM title WHERE id='".$id."'");
mysqli_close($conn);
header("Location: admin_all.php");
	
	
?>