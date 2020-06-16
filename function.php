<?php 
	
	function showdetails($std, $rollno){
	include('dbcon.php');

	$sql = "DELETE FROM `student` WHERE `std`='$std' AND `rollno`='$rollno'";
	$run = mysqli_query($conn,$sql);

	if($run == true)
	{

		$result = mysqli_num_rows($run);
		if($result>0)
		{
			$data = mysqli_fetch_assoc($run);
			?>
			<table>
				<tr>
					<th colspan="3">Student Details</th>
				</tr>
				<tr>
					<td rowspan="5"><img src="dataimages/<?php echo $data['image'];?>" style="max-height: 150[px; max-width: 120px;"></td>
					<th>Roll No</th>
					<td><?php echo $data['rollno'];?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
					<th>Std</th>
					<td><?php echo $data['std'];?></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td><?php echo $data['pcon'];?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $data['city'];?></td>
				</tr>
			</table>

			<?php
		}
		else{
			echo "<script>alert('No Student Found.');</script>";
		}


	}

	}

 ?>