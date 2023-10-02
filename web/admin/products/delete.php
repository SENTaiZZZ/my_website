<?php 

	$id = $_GET['id'];
	require '../connectsql.php';
	$sql = "delete from products where id = '$id'";

	mysqli_query($connect,$sql);
	mysqli_close($connect);
 ?>