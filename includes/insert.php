<?php
include_once 'connection.php';

	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$msg = $_POST['txtMsg'];
	$date = $_POST['txtDate'];
	$hour = $_POST['txtHour'];
	
    $sql = "INSERT INTO contactos (name,email,msg,date,hour) VALUES ('$name','$email','$msg','$date','$hour');";
 	$dbh->exec($sql);

    header("Location: ../index.php?insert=success");

