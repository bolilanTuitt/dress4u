<?php 

$host = 'db4free.net';
$username = 'littlemisskdress';
$password = 'littlemisskdress4u123';
$dbname = 'ecomdress4u';


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