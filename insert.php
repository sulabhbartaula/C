<!DOCTYPE html>
<html>
<head>
	<title>Insert Page</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost","root","","acme");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "insert into customer(name,email,mobile)values('$name','$email','$phone')";
$result = mysqli_query($con,$sql);
if($result){
	echo "<script>alert('Customer Insert Sucessful')</script>";
	header("Location: index.php");
}else{
	echo "<script>alert('Not Sucessful. Try Again')</script>";
	include('create.php');
}
?>
</body>
</html>