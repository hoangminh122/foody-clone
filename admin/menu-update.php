<?php 
require 'page-header.php';
include 'helper.php';
require 'database.php';
$id=null;
$conn = Database::connect();
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
} 

if ( null==$id ) {
	header("Location:menu-read.php");
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// keep track post values
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price=$_POST['price'];
	$thumbnail=uploadFile('thumbnail');
	$shop_id = $_POST['shop_id'];
	// update data

	$sql = "UPDATE menus SET
	name = '$name',
	description = '$description',
	price= '$price',
	thumbnail= '$thumbnail',
	shop_id = '$shop_id'
	WHERE id=$id";

	$conn->query($sql);
	header("Location:menu-read.php");
}
else {
   	$sql = "SELECT * FROM menus where id=$id ";
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		$data = $results->fetch_array();
	}
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link   href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Left Panel -->
    <?php include 'page-panel.php'; ?>
    <!-- Right Panel -->
    <!-- Scripts -->
   
	<div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Thay đổi thông tin món ăn</h3>
    		</div>
			<form method="POST" enctype="multipart/form-data">	 
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tên món ăn</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên cửa hàng" name="name" value="<?php echo $data['name'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Mô tả món ăn</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ" name="description" value="<?php echo $data['description'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giá</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên vùng" name="price"  value="<?php echo $data['price'];?>">
				  </div>
				  <div class="form-group">
				    <label for="thumbnail">Ảnh món ăn</label>
				    <input type="file" id="thumbnail" name="thumbnail">
				  </div>
				  <div class="form-group">
				    <label>Chọn Shop</label>
				  	<?php 
                    $sql = "SELECT * FROM shops";
                    $results = mysqli_query($conn, $sql);
                    if ($results->num_rows > 0) {
                    	echo '<br/><select name="shop_id" class="form-control">';
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'" '.($data['shop_id']==$row['id'] ? 'selected':'') .'>'.$row['name'].'</option>';
                        }  
                        echo '</select>';              
                    }
                    ?>
                   </div>
				  <div>
					  <button type="submit" class="btn btn-primary"> Cập nhập danh mục </button>
					  <a class="btn" href="menu-read.php">Trở lại </a>
				  </div>
			</form>
		</div>
	</div>
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