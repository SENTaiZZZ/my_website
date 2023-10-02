<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (empty($_GET['id'])) {
			header('location:index.php?error=Phải truyền id để sửa!');
		}
		$id = $_GET['id'];
		include '../menu.php';
		require '../connectsql.php';
		$sql = "select * from manufacturers where id = '$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
	 ?>
	<form action="process_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		<br>
		Tên
		<input type="text" name="name" value="<?php echo $each['name'] ?>">
		<br>
		Địa Chỉ
		<textarea name="address"><?php echo $each['address'] ?></textarea>
		<br>
		Điện thoại
		<input type="text" name="phone" value="<?php echo $each['phone'] ?>">
		<br>
		Ảnh
		<input type="text" name="photo" value="<?php echo $each['photo'] ?>">
		<br>
		<br>
		<button>SỬA</button>
	</form>
</body>
</html>