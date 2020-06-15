<?php 

	session_start();
	if(isset($_SESSION['uid'])){
		echo "";
	}
	else{
		header('location: ../login.php');	
	}

 ?>

<?php 
	include('header.php');
	include('../dbcon.php');

	$sid = $_GET['sid'];

	$sql="SELECT * FROM `student` WHERE `id`='$sid'";
	$run = mysqli_query($conn,$sql);


	$data = mysqli_fetch_assoc($run);
 ?>


<form method="post" action="updatedata.php" enctype="multipart/form-data">
 		<table>
 			<tr>
 				<td>Roll No.</td>
 				<td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>" required></td>
 			</tr>
 			<tr>
 				<td>Full Name</td>
 				<td><input type="text" name="name" value="<?php echo $data['name'];?>" required></td>

 			</tr>
 			<tr>
 				<td>City</td>
 				<td><input type="text" name="city" value="<?php echo $data['city'];?>" required></td>

 			</tr>
 			<tr>
 				<td>Contact</td>
 				<td><input type="text" name="pcon" value="<?php echo $data['contact'];?>" required></td>

 			</tr>
 			<tr>
 				<td>Std</td>
 				<td><input type="number" name="std" value="<?php echo $data['std'];?>" required></td>

 			</tr>
 			<tr>
 				<td>Image</td>
 				<td><input type="file" name="simg" required></td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
 					<input type="submit" name="submit" value="submit">
 				</td>
 			</tr>
 		</table>
 	</form>
 </body>
 </html>