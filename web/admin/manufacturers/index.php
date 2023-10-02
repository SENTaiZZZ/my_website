<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>ĐÂY LÀ KHU VỰC QUẢN LÝ NHÀ SẢN XUẤT</h1>
	<?php 
		include '../menu.php';
	 ?>

	<a href="form_insert.php">THÊM NHÀ SẢN XUẤT</a>
	<?php 
	require '../connectsql.php';
	$sql = "select * from manufacturers";
	$result = mysqli_query($connect,$sql);
	?>

	<table border="1" width="100%">
		<tr>
			<th>MÃ</th>
			<th>TÊN</th>
			<th>ĐỊA CHỈ</th>
			<th>SDT</th>
			<th>ẢNH</th>
			<th>SỬA</th>
			<th>XÓA</th>
		</tr>
		<?php foreach ($result as $each): ?> 
			<tr>
				<td><?php echo $each['id'] ?></td>
				<td><?php echo $each['name'] ?></td>
				<td><?php echo $each['address'] ?></td>
				<td><?php echo $each['phone'] ?></td>
				<td>
					<img height="100" src="<?php echo $each['photo'] ?>">
				</td>
				<td>
					<a href="form_update.php?id=<?php echo $each['id'] ?>">
						SỬA
					</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?>">
						XÓA
					</a>
				</td>
			</tr>
			
		<?php endforeach ?>
	</table>

</body>
</html>