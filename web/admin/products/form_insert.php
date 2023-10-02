<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		require '../menu.php'; 
		require '../connectsql.php';
		$sql = "select * from manufacturers";
		$result = mysqli_query($connect,$sql);
	 ?>
	 <form action="process_insert.php" method="post" enctype="multipart/form-data">
		Tên
		<input type="text" name="name">
		<br>
		Ảnh
		<input type="file" name="photo">
		<br>
		Giá
		<input type="number" name="price">
		<br>
		Mô tả
		<input type="text" name="description">
		<br>
		Nhà sản xuất
		<select name="manufacturer_id">
			<?php foreach ($result as $each): ?>
				<option value="<?php echo $each['id'] ?>">
					<?php echo $each['name'] ?>
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>THÊM</button>
	</form>
</body>
</html>