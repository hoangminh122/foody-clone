<?php 
include 'page-header.php';
include 'helper.php';
require 'database.php';
	
$conn = Database::connect();

if ( !empty($_POST)) {
	// keep track post values
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price=$_POST['price'];
	$thumbnail=uploadFile('thumbnail');
	$shop_id = $_POST['shop_id'];
	
	// insert data
	$sql = "INSERT INTO menus (name,description,price,thumbnail,shop_id) values('$name', '$description','$price','$thumbnail','$shop_id')";
	$conn->query($sql);
	header("Location:menu-read.php");
}



?>
<body>
    <!-- Left Panel -->
    <?php include 'page-panel.php'; ?>
    <!-- Right Panel -->
   <div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Thêm cửa hàng</h3>
    		</div>
    		<!-- muốn sử dụng upload file thì cần 2 thứ
			1. 1 input type file
			2. enctype="multipart/form-data"
    		 -->
			<form method="POST" enctype="multipart/form-data">
				  
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tên món ăn</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên cửa hàng" name="name" value=" <?php echo !empty($name)?$name:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Mô tả món ăn</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ" name="description" value=" <?php echo !empty($description)?$description:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giá</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên vùng" name="price" value=" <?php echo !empty($price)?$price:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="thumbnail">Ảnh món ăn</label>
				    <input type="file" id="thumbnail" name="thumbnail">
				  </div>
				  <div class="form-group">
				    <label >Chọn Shop</label>
				  	<?php 
                    $sql = "SELECT * FROM shops";
                    $results = mysqli_query($conn, $sql);
                    if ($results->num_rows > 0) {
                    	echo '<select name="shop_id" class="form-control">';
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                        }
                        echo '</select>';                
                    }
                    ?>
                   </div>
				  <!--
				  <div class="form-group">
				    <label for="exampleInputEmail1">Hình ảnh</label> <br>
				    <input type="file" placeholder="Link hình ảnh" name="thumbnail" value=" <?php echo !empty($thumbnail)?$thumbnail:'';?>">
				  </div>
					-->
				  <div>
					  <button type="submit" class="btn btn-primary" name="submit" value="add-new"> Thêm </button>
					  <a class="btn" href="index.php">Trở lại bảng tin</a>
				  </div>
			</form>
		</div>
	</div>

    <!-- Scripts -->
   <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>