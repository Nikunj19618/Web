<!DOCTYPE HTML>
<html>
<head>
<title>Comment</title>
</head>
<body>
<h1>Type a Comment</h1>
<br>
 <form method="get" action="comment.php">	
<input type="number" name='uid' value="1">
<textarea name="m" rows="5" cols="40"></textarea>
<button name="submit" type="submit">Comment</button>
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','smss');
if(isset($_GET['submit']))
{
	
	$message = $_GET['m'];
	$uid=$_GET['uid'];
$qry="INSERT INTO `comments`(`uid`,`message`) VALUES ('$uid','$message')";
$run=mysqli_query($con,$qry);
}
?>