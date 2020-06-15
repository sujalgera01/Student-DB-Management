<?php 

include('../dbcon.php');
	$rolno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$pcon = $_POST['pcon'];
	$std = $_POST['std'];
	$id = $_POST['sid'];
	$imagename = $_FILES['simg']['name'];
	$tempname = $_FILES['simg']['tmp_name'];

	move_uploaded_file($tempname,"../dataimages/$imagename");


	$qry = "UPDATE `student` SET `rollno`='$rollno',`name`='$name',`city`='$city',`contact`='$pcon',`std`='$std',`image`='$imagename' WHERE `id`='$id'";

	$run = mysqli_query($conn,$qry);
	if($run == true){
		?>
		<script>
			alert('Data updated Successfully');
			window.open('updateform.php?sid=<?php echo $id;?>','_self');
		</script>
		<?php
	}
 ?>