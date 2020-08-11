<?php
$conn=mysqli_connect('localhost','root','','demo');
if(!$conn)
{
	die("connection failed");
}
else
{
	 echo "connection succcesfull";
}

?>