<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","test");
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Connection</title>
</head>
<body>
<form method="POST">
	Name: <input type="text" name="name"> </br> </br>
	Username: <input type="text" name="username"> </br> </br>
	Password: <input type="text" name="password"></br> </br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php
$nm=$_POST['name'];
$unm=$_POST['username'];
$pass=$_POST['password'];
?>

<?php
$query = "INSERT INTO `user` (`name`, `username`, `password`) VALUES ('$nm','$unm','$pass')";
mysqli_query($conn,$query)
?>
</body>
</html>