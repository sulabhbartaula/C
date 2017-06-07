<!DOCTYPE html>
<html>
<head>
	<title>This is my change</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" scr="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
<h2>Customer Record</h2><hr>
<p>
	<button class="btn btn-success" href='create.php'>Create</button>
</p>
	<table class="table table-hover table-bordered table-stripped">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Action</th>
	</tr>
	<?php
		$con = mysqli_connect("localhost","root","","acme");
		$sql = 'select * from customer';
		$rows = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($rows)){
			$id = $row['id'];
			$name = $row['name'];
			$email = $row['email'];
			$mobile = $row['mobile'];
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$name</td>";
			echo "<td>$email</td>";
			echo "<td>$mobile</td>";
			echo "<td><a class='btn btn-info' href='read.php?id=$id'>Read</a></td>";
			echo "</tr>";
		}
	?>
		
	</table>

</div>


</body>
</html>