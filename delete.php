<?php
require_once("db.php");
$sql = "DELETE FROM medicine WHERE slno='" . $_GET["slno"] . "'";
mysqli_query($link,$sql);
header("Location:view.php");
?>