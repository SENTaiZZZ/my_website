
<style type="text/css">
	.each_product{
		width: 33%;
		border: 1px solid black;
		height: 250px;
		float: left;
	}
</style>

<?php 
	require 'admin/connectsql.php';
	$sql = "select * from products";
	$result = mysqli_query($connect,$sql);
?>

<div id="giua">
	<?php foreach ($result as $each): ?>
		<div class="each_product">
			<h1>
				<?php echo $each['name'] ?>
			</h1>
			<img src="admin/products/photos/<?php echo $each['photo'] ?>" height='100'>
			<br>
			<p><?php echo 'Price: ' . $each['price'] ?>$</p>
			<a href="product.php?id=<?php echo $each['id'] ?>">
				Xem chi tiết >>>>>
			</a>
		</div>

	<?php endforeach ?>
</div>