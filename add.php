<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Medical registration</title>
</head>
<body align="center">
<form  method="post" action="insert.php">
<label for="yourname">NAME:</label>
<input type="text" name="name"></input>
<br>
<label for="age">AGE:</label>
<input type="text" name="age"></input>
<br>
<label for="sex">SEX:</label>
MALE<input type="radio" name="gender" value="male"></input>&nbsp
FEMALE<input type="radio" name="gender" value="female"></input>&nbsp
OTHERS<input type="radio" name="gender" value="others"></input>&nbsp
<br>
<label for="date">Date:</label>
<input type="date" name="date"></input>
<br>
<label for="dob">DOB:</label>
<input type="date" name="dob"></input>
<br>
<label for="rx">RX:</label>
<input type="text" name="rx"></input>
<br>
<label for="allries">ALLRIES:</label>
<input type="text" name="allries"></input>
<br>
<input type="submit" value="add" name="add" class="btn btn-danger"></input>
<td><a href="view.php">view</a></td>
</body>
</html>