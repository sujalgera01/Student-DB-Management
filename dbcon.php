<?php
$servername = "localhost";
$username = "root";
$password = "Sujal1003";
$dbName = "studentmanagement";

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}

?>