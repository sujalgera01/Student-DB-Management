<?php 

	session_start();
	if(isset($_SESSION['uid'])){
		echo "";
	}
	else{
		
	}

 ?>

 <?php
 	include('header.php');
  ?>

  <h1>Welcome to Admin dashboard</h1>
  <h4><a href="logout.php" style="float: right;">Logout</a></h4>


 	<form method="post" action="add.php" enctype="multipart/form-data">
 		<table>
 			<tr>
 				<td>Roll No.</td>
 				<td><input type="text" name="rollno" placeholder="enter RollNo" required></td>
 			</tr>
 			<tr>
 				<td>Full Name</td>
 				<td><input type="text" name="name" placeholder="enter name" required></td>

 			</tr>
 			<tr>
 				<td>City</td>
 				<td><input type="text" name="city" placeholder="enter city" required></td>

 			</tr>
 			<tr>
 				<td>Contact</td>
 				<td><input type="text" name="pcon" placeholder="enter contact no" required></td>

 			</tr>
 			<tr>
 				<td>Std</td>
 				<td><input type="number" name="std" placeholder="enter std" required></td>

 			</tr>
 			<tr>
 				<td>Image</td>
 				<td><input type="file" name="simg" required></td>
 			</tr>
 			<tr>
 				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
 			</tr>
 		</table>
 	</form>
</body>
</html>

<?php 
	
	if(isset($_POST['submit']))
	{
	include('../dbcon.php');
	$rolno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimages/$imagename");


	$qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `contact`, `std`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename')";

	$run = mysqli_query($conn,$qry);
	if($run == true){
		?>
		<script>
			alert('Data inserted Successfully');
		</script>
		<?php
	}

	}
 ?>