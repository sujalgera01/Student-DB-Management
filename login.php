<?php 

	session_start();
	if(isset($_SESSION['uid'])){
		header('location:admin/admindash.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h1>Admin Login</h1>
	<form method="post">
		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>

	</form>

</body>
</html>

<?php 

	include('dbcon.php');
	if(isset($_post['login'])){
		$username = $_post['username'];
		$password = $_post['password'];

		$qry = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

		$run = mysqli_query($conn,$qry);
		$row_cnt = mysqli_num_rows($run);
		if($row_cnt<1){
			?>
			<script>
			alert('Username and Password Mismatch!!');
			window.open('login.php','_self');
		</script>
		<?php
		}
		else{
			$data = mysqli_fetch_assoc($run);

			$id = $data['id'];

			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
		}
	}
	
 ?>