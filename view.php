<?php
	require_once("db.php");
	$sql = "SELECT * FROM medicine ORDER BY slno DESC";
	$result = mysqli_query($link,$sql);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<form name="frmUser" method="post" action="">
	<div style="width:500px;">
	<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
	<div align="right" style="padding-bottom:5px;"><a href="add.php" class="link"></a></div>
		<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
			<tr class="listheader">
			<td>slno</td>
			<td>Name</td>
			<td>Age</td>
			<td>Sex</td>
			<td> Date</td>
			<td>DOB</td>
			<td> RX</td>
			<td>ALLRIES</td>
			<td>CRUD Actions</td>
			</tr>
		<?php
		$i=0;
		while($row = mysqli_fetch_array($result)) {
		if($i%2==0)
		$classname="evenRow";
		else
		$classname="oddRow";
		?>
			<tr class="<?php if(isset($classname)) echo $classname;?>">
			<td><?php echo $row["slno"]; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["age"]; ?></td>
				<td><?php echo $row["sex"]; ?></td>
				<td><?php echo $row["date"]; ?></td>
				<td><?php echo $row["dob"]; ?></td>
				<td><?php echo $row["rx"]; ?></td>
				<td><?php echo $row["allries"]; ?></td>
				<td><a href="edit.php?slno=<?php echo $row["slno"]; ?>" class="link">edit</a> <a href="delete.php?slno=<?php echo $row["slno"]; ?>"  class="link">delete</a></td>
				<td><a href="add.php">add</a></td>
			</tr>

		<?php
		$i++;
		}
		?>
		</table>
	</form>
</div>
</body></html>