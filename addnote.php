<!DOCTYPE HTML>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h3 align="center"><a href="index.php">Back</a></h3>
	<h1 align="center">Notes</h1>
	<br>
	<form method="post" align="center">
		
				<center>User id	
				<input type="text" name="useid" placeholder="Enter your user id">
				<br>
				<br>
				<center><lable>Note Name</lable>
				<input type="text" name='notename' placeholder="Enter note name">
				</center>
				<br>
				<textarea name="m" rows="20" cols="40" placeholder="content"></textarea>
			<center><button name="submit" type="submit">Save</button></center>

		
	</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','bvm');
if(isset($_POST['submit']))
{
	$useid = $_POST['useid'];
	$name=$_POST['notename'];	
	$note = $_POST['m'];
$qry="INSERT INTO `note`(`userid`, `notename`, `note`) VALUES ('$useid','$name','$note')";
$run=mysqli_query($con,$qry);
}
?>