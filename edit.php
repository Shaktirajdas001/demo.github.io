<?php
require_once("db.php");
if(count($_POST)>0)
 {
	$sql = "UPDATE medicine set name='" . $_POST["name"] . "', age='" . $_POST["age"] . "', sex='" . $_POST["sex"] . "', date='" . $_POST["date"] . "',dob='" . $_POST["dob"]."',rx='" . $_POST["rx"]."',allaries='".$_POST["allreis"]."'   WHERE slno='" . $_POST["slno"] . "'";
	mysqli_query($link,$sql);
	$message = "Record Modified Successfully";
	//header("location:view.php");
}
$select_query = "SELECT * FROM medicine  WHERE slno='" . $_GET["slno"] ."'";
$result = mysqli_query($link,$select_query);
$row = mysqli_fetch_array($result);
?>