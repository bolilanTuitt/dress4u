<?php 

$host = 'sql150.main-hosting.eu';
$username = 'u663841285_dress';
$password = 'dress4u';
$dbname = 'u663841285_dress';


// $host = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'test';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
	die('connection failed: ' . mysqli_error($conn));
}

// echo 'Connected';

 ?>