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

  <table>
  	<tr>
  		<td>1.</td>
  		<td><a href="add.php">Insert Student Details</a></td>
  	</tr>
    <tr>
  		<td>2.</td>
  		<td><a href="delete.php">Insert Student Details</a></td>
  	</tr>
  	  <tr>
  		<td>3.</td>
  		<td><a href="update.php">Insert Student Details</a></td>
  	</tr>
  </table>
 </body>
 </html>