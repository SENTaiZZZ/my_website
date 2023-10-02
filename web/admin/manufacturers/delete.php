
<?php 
	if (empty($_GET['id'])) {
			header('location:index.php?error=Phải truyền id để xóa!');
		}
		$id = $_GET['id'];
		require '../connectsql.php';
		$sql = "delete from manufacturers where id = '$id'";

		mysqli_query($connect,$sql);
		mysqli_close($connect);
		header('location:index.php?success=Xóa thành công!');
		
 ?>