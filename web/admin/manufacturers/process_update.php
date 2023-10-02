<?php 
	if (empty($_POST['id'])) {
		header('location:form_update.php?error=phải truyền mã!');
		exit();
	}
	$id = $_POST['id'];

	if (empty($_POST['name']) || 
		empty($_POST['address']) || 
		empty($_POST['phone']) || 
		empty($_POST['photo'])) {
		header("location:form_update.php?id=$id&error=Vui lòng điền đầy đủ thông tin");
		exit();
	}

	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];	
	$phone = $_POST['phone'];
	$photo = $_POST['photo'];

	require '../connectsql.php';
	$sql = "update manufacturers 
	set
	name = '$name',
	address = '$address',
	phone = '$phone',
	photo = '$photo'
	where 
	id = '$id'
	";

	mysqli_query($connect,$sql);
	$errorsql = mysqli_error($connect);
	mysqli_close($connect);

		if (empty($errorsql)) {
			header('location:index.php?success=Sửa thành công!');
		} else {
			header("location:index.php?id=$id&error=Lỗi truy vấn sql!");
		}
		

	header('location:index.php?success=Sửa thành công');
 ?>