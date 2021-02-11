<?php
$user = 'cbse';
$pass = 'cbse';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=titan;charset=utf8', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>