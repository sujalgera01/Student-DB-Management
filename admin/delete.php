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
  ?>
  <h1>Welcome to Admin dashboard</h1>
  <h4><a href="admindash.php" style="float: right;">Back to Dashboard</a></h4>
  <br>
  <h4><a href="logout.php" style="float: right;">Logout</a></h4>

  <table>

  <form method="post" action="delete.php">
  	<tr>
  		<th>Enter Standard</th>
  		<td><input type="number" name="std" placeholder="Enter Std" required></td>

  		<th>Enter Student Name</th>
  		<td><input type="text" name="stuname" placeholder="Enter student name" required></td>
  		
  		<td colspan="2"><input type="submit" name="submit" value="Search"></td>
  	</tr>
  	
  </form>
</table>

<table>
	<tr>
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edit</th>

	</tr>

	<?php 

	if(isset($_POST['submit'])){
		include('../dbcon.php');

		$std = $_POST['std'];
		$name = $_POST['stuname'];

		$qry = "SELECT * FROM `student` WHERE `std`='$std' AND `name` LIKE '%$name%'";

		$run = mysqli_query($conn,$qry);
		

		if($run == true)
		{


		$result = mysqli_num_rows($run);
		if($result<1){
			echo "No Record Found";
		}
		else{
			$count = 0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				<tr>
		<td><?php echo $count; ?></td>
		<td><img src="../dataimages/<?php echo $data['image']; ?>" style="max-width: 100px;"></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['rollno']; ?></td>
		<td><a href="deleteform.php?sid=<?php echo $data['id']?>">Delete</a></td>

	</tr>


				<?php
			}
		}

			
		}
		
	}
 ?>

</table>
</body>
</html>


