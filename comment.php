<!DOCTYPE HTML>
<html>
<head>
<title>Comment</title>
</head>
<body>
<h3 align="center"><a href="index.php">Back</a></h3>
<br>
<center><h1>Type a Comment</h1></center>
<br>
 <form method="get" action="comment.php">
<center>Enter your User Id 
<input type="number" name='nam'>
</center>
<br>
<center>Enter Note Id 
<input type="number" name='noteid'>
</center>
<br>
<center><textarea name="m" rows="5" cols="40"></textarea></center>
<br>
<center><button name="send" type="submit">Comment</button></center>
</form>
</body>
</html	
<?php
$con=mysqli_connect('localhost','root','','bvm');
if(isset($_GET['send']))
{
	
	$comment = $_GET['m'];
	$userid=$_GET['nam'];
	$noteid=$_GET['noteid'];
$qry="INSERT INTO `comment`(`userid`,`noteid`,`comment`) VALUES ('$userid','$noteid','$comment')";
$run=mysqli_query($con,$qry);
}
?>