<?php
/*
$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
	echo "not connect";
}
/*else
{
	echo "connect";
}
$select_db=mysqli_select_db($conn,"project");
if(!$select_db)
{
	echo "not connect";
}
*/echo"mohit";

if(isset($_POST["add"]))
{
	echo'mohit';
	$a1=$_POST['t1'];

	echo $a1;
}

?>

<html>
<head>

</head>
<body>

	<form method="post">

input<input type="text" name="t1">
	<center><input type="submit"  name="add"><br></center>
	
	</form>
</body>
</html>
