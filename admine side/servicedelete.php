<?php
ob_start();

include("connection.php");

$name=$_GET['name'];

//echo $name;

 $sql="delete from gallrytable where name='$name'";

$ss=mysqli_query($con,$sql);

if(!$ss)
{
	?><script>alert('not deleted')</script><?php
}
else
{
	header("location:filedata.php");
}


?>