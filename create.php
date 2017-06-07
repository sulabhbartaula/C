<!DOCTYPE html>
<html>
<head>
	<title>Create Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" scr="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	
	<div class="span10 offset1">
		<div class="row">
		<h2>Create a Customer</h2><hr>
		<p>
	<a class="btn btn-warning" href='index.php'>Display all records</a>
</p>
	</div>

	<form class="form-horizontal" method="POST" action="insert.php">

		<div class="form-group">
			<label>Name :</label>
			<input type="text" name="name" class="form-control" required="required" placeholder="Enter your name"> 
		</div>

		<div class="form-group">
			<label>Email :</label>
			<input type="text" name="email" class="form-control" required="required" placeholder="Enter email"> 
		</div>
		<div class="form-group">
			<label>Phone :</label>
			<input type="text" name="phone" class="form-control" required="required" placeholder="Enter phone"> 
		</div>
		<input type="reset" value="Reset Value" class="btn btn-warning">
		<button type="submit" class="btn btn-success">Register</button>
		
	</form>

	</div>


</div>

</body>
</html>