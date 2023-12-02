<?php require_once("show.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<?php 
		if($cnt>0){
	?>

	<table width="100%" border="1">
		<tr>
			<th>Sl</th>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
		</tr>
	<?php 
	$i=1;
	while($rec=mysqli_fetch_object($showQry)){
	?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $rec->id;?></td>
			<td><?php echo $rec->name;?></td>
			<td><?php echo $rec->price;?></td>
		</tr>
	<?php $i++;} ?>
	</table>
<?php } ?>
</body>
</html>