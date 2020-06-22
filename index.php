<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student Database Management System</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<h3><a href="login.php">Admin Login</a></h3>
	<h1>Welcome to Student Management System</h1>

	<form method="post" action="index.php">
	<table>
		<tr>
			<td colspan="2">Student Information</td>
		</tr>
		<tr>
			<td>Choose Standard</td>
			<td>
				<select name="std">
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
					<option value="7">7th</option>
					<option value="8">8th</option>
					<option value="9">9th</option>
					<option value="10">10th</option>
					<option value="11">11th</option>
					<option value="12">12th</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Enter Rollno</td>
			<td>
				<input type="text" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Show Info">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php 

if(isset($_POST['submit'])){
	$std = $_POST['std'];
	$rollno = $_POST['rollno'];

	include('dbcon.php');
	include('function.php');

	showdetails($std, $rollno);
}

 ?>