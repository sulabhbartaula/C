<?php

$id=null;

$id=$_GET['id'];
if($id==null){
	header("Location: index.php");
}else{
	$con = mysqli_connect("localhost","root","","acme");
	$sql = "select * from customer where id=$id";
	$rows = mysqli_query($con,$sql);

	if($row = mysqli_fetch_array($rows)){
		$name = $row['name'];
		$email = $row['email'];
		$phone = $row['mobile'];
	}else{
		echo "<script>alert('No Record Found')</script>";
		header("Location: index.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Read Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" scr="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<h2>Detail Record</h2><hr>
	</div>

	<div class="control-group">
	<label class="control-label">Name :</label>
	<label class="control-label"><?php echo $name;  ?></label>
		
	</div>

	<div class="control-group">
	<label class="control-label">Email :</label>
	<label class="control-label"><?php echo $email;  ?></label>
		
	</div>

	<div class="control-group">
	<label class="control-label">Phone :</label>
	<label class="control-label"><?php echo $phone;  ?></label>
		
	</div>

	 <div class="form-actions">
                          <a class="btn btn-primary" href="index.php">Back</a>
                       </div>
</div>

</body>
</html>