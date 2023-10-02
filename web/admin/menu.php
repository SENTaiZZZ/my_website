<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
		<li>
			<a href="../manufacturers">QUẢN LÝ NHÀ SẢN XUẤT</a>
		</li>
	</ul>
	<ul>
		<li>
			<a href="../products">QUẢN LÝ SẢN PHẨM</a>
		</li>
	</ul>

	<?php 
	if (isset($_GET['error'])){
	?>
		<span style="color: red">
			<?php echo $_GET['error'] ?>
		</span>
	<?php } ?>

	<?php 
	if (isset($_GET['success'])){
	?>
		<span style="color: green">
			<?php echo $_GET['success'] ?>
		</span>
	<?php } ?>

</body>
</html>