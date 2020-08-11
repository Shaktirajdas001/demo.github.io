<?php
include 'db.php';
mysqli_select_db($link,"medico");
$value=$_POST['value'];
$sql="select * from medicine where slno=$value";
$result=mysqli_query($link,$sql);
?>
<?php
if($result)
{
	while($row=mysqli_fetch_array($result))
	{
		?>
		<table>
		<tr><th>slno</th><th>name</th><th>age</th><th>sex</th><th>date</th><th>dob</th><th>rx</th><th>allries</th></tr>
<tr>
		<td><?php echo $row["slno"]; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["age"]; ?></td>
				<td><?php echo $row["sex"]; ?></td>
				<td><?php echo $row["date"]; ?></td>
				<td><?php echo $row["dob"]; ?></td>
				<td><?php echo $row["rx"]; ?></td>
				<td><?php echo $row["allries"]; ?></td>
				</tr>
				<?php
	}
}
?>
</table>