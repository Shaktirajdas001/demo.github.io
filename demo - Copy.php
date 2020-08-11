<?php
require_once("validation.php");
extract($_POST);
if(isset($register))
{
	$valid_name=validate_data($name);
	$valid_password=validate_data($password);
	$valida_email=validate_data($email);
	if(empty($valid_name)or empty($valid_password) or empty($valid_email))
	{
		echo "please fill the vacant";
     }
	elseif(20<strlen($valid_name))
	echo "name is too long";
    elseif($valid_password)
	echo "plese enter the password";
    elseif($valid_email)
	echo "plese enter the valid email";
    else
    {
	include_once("connection.php");
	$email_exist="select name from das where email='$valid_email'";
	$result=mysqli_query($conn,$email_exist);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "this email exist";
	}
	else
	{
		$insert="insert into das (name,password,email) values('$valid_name','$valid_password','$valid_email')";
		$resultset=mysqli_query($conn,$insert);
		if($result)
		{
			echo "registation is succes";
		}
		else
			echo " unsucces registation";
	}
}

?>

<form method="post" action="#">
<input type="text" name="name">
<br>
<input type="text" name="password">
<br>
<input type="text" name="email">
<br>
<input type="submit" name="register" value="register">
</form>