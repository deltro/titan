<?php
include_once 'connection.php';

	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$msg = $_POST['txtMsg'];
	$service = $_POST['txtService'];
	
    $sql = "INSERT INTO propostas (name,email,msg,service) VALUES ('$name','$email','$msg','$service');";
 	$dbh->exec($sql);

    header("Location: ../index.php?insert=success");

?>