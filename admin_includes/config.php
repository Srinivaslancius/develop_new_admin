<?php
session_start();
date_default_timezone_set("Asia/Kolkata");

$setcon = 2;
if($setcon == 1) {
	$servername = "localhost";
	$username = "";
	$password = "capital@123";
	$dbname = "capitalsecure_latest";
} else {
	$servername = "192.168.0.101";	
	$username = "root";
	$password = "root";
	$dbname = "develop_new_admin";
}  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$base_url = "http://localhost:8012/develop_new_admin/";
//$base_url = "http://sampradayaruchulu.com/";
?>