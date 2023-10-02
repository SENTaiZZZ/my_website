<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<?php if (isset($_GET['error'])) {
		echo $_GET['error'];
	} ?>

	<form method="post" action="process_signup.php">
		<h1>From đăng ký</h1>
		Tên
		<input type="text" name="name">
		<br>
		Email
		<input type="email" name="email">
		<br>
		Mật khẩu
		<input type="password" name="password">
		<br>
		<button>Đăng ký</button>
	</form>
</body>
</html>