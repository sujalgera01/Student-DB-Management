<?php
$servername = "localhost";
$username = "root";
$password = "Sujal1003";
$dbName = "mywebsite";

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}

echo "Successfully Connected";

$conn->close();
?>