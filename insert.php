<?php
include 'db.php';
if(isset($_POST['add']))
{
$name =$_POST['name'];
$age =$_POST['age'];
$sex =$_POST['gender'];
$date =$_POST['date'];
$dob =$_POST['dob'];
$rx =$_POST['rx'];
$allries =$_POST['allries'];

 

$sql = "INSERT INTO medicine (name,age,sex,date,dob,rx,allries) VALUES ('$name','$age','$sex','$date','$dob','$rx','$allries')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header("Location:view.php");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//mysqli_close($link);
}
?>