<?php 
include 'page-header.php';
require 'database.php';

if ( !empty($_POST)) {
	// keep track post values
	$name = $_POST['name'];
	$description = $_POST['description'];
	// insert data
	$conn = Database::connect();
	$sql = "INSERT INTO categories (name,description) values('$name', '$description')";
	$conn->query($sql);
	header("Location:category-read.php");
}
?>
<body>
    <!-- Left Panel -->
    <?php include 'page-panel.php'; ?>
    <!-- Right Panel -->
   <div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Tạo danh mục</h3>
    		</div>
			<form method="POST" action="category-create.php">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tên danh mục</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục" name="name" value=" <?php echo !empty($name)?$name:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Mô tả danh mục</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Miêu tả danh mục" name="description" value="<?php echo !empty($description)?$description:'';?>">
				  </div>
				  <div>
					  <button type="submit" class="btn btn-primary"> Tạo danh mục </button>
					  <a class="btn" href="index.php">Trở lại bảng tin</a>
				  </div>
			</form>
		</div>
	</div>

    <!-- Scripts -->
   <?php include 'page-scripts.php'; ?>

</body>
</html>