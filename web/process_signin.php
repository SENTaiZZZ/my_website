<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];

	require 'admin/connectsql.php';
	$sql = "select * from customers 
	where email = '$email' and password = '$password'";
	$result = mysqli_query($connect,$sql);
	$number_rows = mysqli_num_rows($result);

	if ($number_rows == 1) {
		session_start();
		$each = mysqli_fetch_array($result);
		$_SESSION['id'] = $each['id'];
		$_SESSION['name'] = $each['name'];

		header('location:user.php');
		exit();
	}

	header('location:signin.php?error=Sai tên đăng nhập hoặc mật khẩu!');

 ?>