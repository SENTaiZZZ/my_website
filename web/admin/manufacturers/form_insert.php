<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 
		require '../menu.php';
	 ?>

	<form action="process_insert.php" method="post">
		Tên
		<input type="text" name="name">
		<br>
		Địa Chỉ
		<textarea name="address"></textarea>
		<br>
		Điện thoại
		<input type="text" name="phone">
		<br>
		Ảnh
		<input type="text" name="photo">
		<br>
		<button>THÊM</button>
	</form>
</body>
</html>