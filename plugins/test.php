<!DOCTYPE html>
<?php include('config.php') ?>
<html>
<head>
	<title></title>
</head>
<body>
<?php $query = mysql_query("SELECT * FROM fakultas");
	while ($data = mysql_fetch_array($query)) {
?>

<table border="1">
	<tr>
		<td rowspan="5">
			<img width="100px" height="100px" src="image/ipb.png">
		</td>
	</tr>
	<tr>
		<td>test</td>
		<td>:</td>	
		<td>test</td>	
	</tr>
	<tr>
		<td>test</td>
		<td>:</td>	
		<td>test</td>	
	</tr>
	<tr>
		<td>test</td>
		<td>:</td>	
		<td>test</td>	
	</tr>
	<tr>
		<td>test</td>
		<td>:</td>	
		<td>test</td>	
	</tr>
</table>
<br>
<?php } ?>

</body>
</html>