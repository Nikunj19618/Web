<html>
<body>
	<h3 align="center"><a href="index.php">Back</a></h3>
	<table align="center">
	<form action="updatenote.php" method="post">
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
	?>
	<form method="post" align="center">
	<br>
				<input type="hidden" name="noteid" value="<?php echo $data['noteid']; ?>" required>		
				<center>Userid	
				<input type="text" name="niks" value = "<?php echo $data['userid']; ?>" required>
			
				</center>
					<br>
				<center>Note Name
				<input type="text" name='notename' value="<?php echo $data['notename']; ?>" required></center>
				<br>
				<textarea name="m" rows="20" cols="40" value="<?php echo $data['note']; ?>" required></textarea>
			<center><button name="send" type="submit">Save</button></center>
	</form>
</body>
</html>		
<?php	
}
}
if(isset($_POST["send"]))
{	
$con=mysqli_connect('localhost','root','','bvm');
	$noteid=$_POST['noteid'];
	$userid=$_POST['niks'];
	$notename=$_POST['notename'];
	$note=$_POST['m'];
	$qry="UPDATE `note` SET `userid`='$userid',`notename`='$notename',`note`='$note' WHERE `noteid`='$noteid'";
	$run=mysqli_query($con,$qry);
}
?>
