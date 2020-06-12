<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Database Management System</title>
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
				<select>
					<option value="1">1st</option>
					<option value="2">2nd</option>
					<option value="3">3rd</option>
					<option value="4">4th</option>
					<option value="5">5th</option>
					<option value="6">6th</option>
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