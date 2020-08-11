<?php
$link = mysqli_connect("localhost", "root", "", "medico");
 

if(!$link)
{
	echo "connection failed";
}