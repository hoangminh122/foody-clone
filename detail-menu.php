
<?php include 'header.php'; ?>
<?php
$conn = Database::connect();
$sql = "SELECT * FROM menus WHERE id=".$_GET['menu_id'];
$results = mysqli_query($conn, $sql);
if ($results->num_rows > 0) {
	$product = $results->fetch_array();
}
?>
	<div class="container">
		<div class="title">
			<div class="thumbnail">
				<?php if($product['thumbnail']) { ?>
					<img src="admin/uploads/<?php echo $product['thumbnail']?>" alt="foody-albummax_.jpg" >
					<?php } else { ?>
						<img src="images/logo.png">
					<?php } 
					?>

			</div>
			<div class="name-price">
				<div class="name"><h1><b><?php echo $product['name'] ?></h1></div>
				<div class="price">
					<p><b><?php echo $product['price'] ?><b></p>
				</div>

			</div>
		</div>
		<span><i> Description</i> </span>
		<div class="description">
				<p><?php echo $product['description'] ?></p>
		</div>
		<div class="">
			
		</div>
	</div>
	
	<?php include 'footer.html' ?>
</body>
</html>