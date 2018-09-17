<!DOCTYPE HTML>
<html>
<head>
	<title>Home page</title>
	<style>
	a{
		color:white;
	}
	</style>
</head>
<body>
<br>
	<h1 align="center">Notes</h1>
	<br>
	<br>
	<div align="center" style="background-color:gray;">
		<br>
			<h2><a href="addnote.php">Add note</a></h2>
			<br>
			
			<h2><a href="updatenote.php">Update note</a></h2>
			<br>
			
			 <h2><a href="deletenote.php">Delete note</a></h2>
			<br>
		</div>

</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','bvm');
if(isset($_POST['submit']))
{
	$useid = $_POST['useid'];
	$name=$_POST['notename'];	
	$note = $_POST['m'];
$qry="INSERT INTO `note`(`noteid`,`userid`, `notename`, `note`) VALUES ('1','$useid','$name','$note')";
$run=mysqli_query($con,$qry);
}
?>