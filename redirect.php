



<?php
	require_once("action.php");
	 $con = mysqli_connect("localhost","root","","customerreg");
	$query = "SELECT * FROM register";
	$result = mysqli_query($con, $query);
?>
<html>
<head>
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.grid.css">
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.grid.min.css"> 
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.grid.min.css">
  <script> src="bootstrap-4/js/bootstrap.js"  </script>


</head>
<body>
	<form name="frmUser" method="post" action="">
	<div style="width:500px;">
	<div class="btn-primary">
		
	</div>
	<div ><h2 style="text-align: center;color: orange"> Inserted Records</h2></div>
	   <div  ><a href="index.php" class="link">
		<img src="img/user.png" style="height:50px;width:50px" alt='Add' title='Add'/> Add User</a></div>
	
		<table border="solid" cellpadding="10" cellspacing="1" width="500" class="container table table-dark">
			<tr class="listheader">
			<td>Customer Name</td>
			<td>Contact</td>
			<td>Address</td>
			<td>Adhaar Number</td>
			<td>Front Image Of Adhaar</td>
			<td> Back Image Of Adhaar </td>
			</tr>
		<?php
		
		while($row = mysqli_fetch_array($result)) {

		
		?>
			<tr class="<?php if(isset($classname)) echo $classname;?>">
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["contact"]; ?></td>
				<td><?php echo $row["address"]; ?></td>
				<td><?php echo $row["adharno"]; ?></td>
				<td><?php echo $row["image"]; ?></td>
				<td><?php echo $row["back"]; ?></td>

				<!--<td><a href="edit_user.php?userId=<?php echo $row["userId"]; ?>" class="link"><img alt='Edit' title='Edit' src='images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_user.php?userId=<?php echo $row["userId"]; ?>"  class="link"><img alt='Delete' title='Delete' src='images/delete.png' width='15px' height='15px'hspace='10' /></a></td>-->
			</tr>
		<?php
		
		}
		?>
		</table>
	</form>