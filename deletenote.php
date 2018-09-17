<html>
<body>
	<h3 align="center"><a href="index.php">Back</a></h3>
	<table align="center">
	<form action="deletenote.php" method="post">
	<td>Enter Noteid</td>
	<td><input type="number" name="noteid" required="required"/></td>
	<td><input type="submit" name="sent" value="search"></td>
	</form>
	</table>
<?php
if(isset($_POST["sent"]))
{
	$con=mysqli_connect('localhost','root','','bvm');
	$snoteid=$_POST['noteid'];	
	$qry="select * from `note` where `noteid`='$snoteid'";
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
	echo "<h1>no record found</h1>";	
	}
	else
	{
	$data = mysqli_fetch_assoc($run);
    $con=mysqli_connect('localhost','root','','bvm');
	$qry="delete from `note` where `noteid`='$snoteid'";
	$run=mysqli_query($con,$qry);
	
	}
}	
?>