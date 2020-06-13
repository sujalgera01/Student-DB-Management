<?php
$servername = "localhost";
$username = "root";
$password = "Sujal1003";
$dbName = "studmanage";

$conn = new mysqli($servername,$username,$password,$dbName);

if($conn == false){
	echo "Connection is not done";
}

?>