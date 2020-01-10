<?php 
include 'page-header.php';
include 'helper.php';
require 'database.php';
$id=null;
$conn = Database::connect();
if ( !empty($_GET['id'])) {
	$id = $_REQUEST['id'];
} 

if ( null==$id ) {
	header("Location:shop-read.php");
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// keep track post values
	$name = $_POST['name'];
	$address = $_POST['address'];
	$area=$_POST['area'];
	$time_open=$_POST['time_open'];
	$price_area=$_POST['price_area'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$thumbnail=uploadFile('thumbnail');
	// update data
	$sql = "UPDATE shops SET name ='$name', address= '$address', area='$area',time_open ='$time_open',price_area='$price_area', phone='$phone', email='$email', thumbnail='$thumbnail'
		WHERE id=$id";
		
	$conn->query($sql);

	$sql = "DELETE FROM shop_category WHERE shop_id=$id";
	$conn->query($sql);

	foreach($_POST['category_id'] as $categoryId){
		$sql ="INSERT INTO shop_category (shop_id,category_id) values('$id', '$categoryId')";
		$conn->query($sql);
	}
	header("Location:shop-read.php");
}
else {
   	$sql = "SELECT * FROM shops where id=$id ";
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		$data = $results->fetch_array();
	}
} 
?>



<body>
	<!-- Left Panel -->
    <?php include 'page-panel.php'; ?>
    <!-- Right Panel -->
    <!-- Scripts -->
   
	<div class="container">
		<div class="span10 offset1">
			<div class="row">
    			<h3>Thay đổi thông tin cửa hàng</h3>
    		</div>
			<form method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tên cửa hàng</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên cửa hàng" name="name" value="<?php echo $data['name'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Địa chỉ</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ" name="address" value=" <?php echo $data['address'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Khu vực/Vùng</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên vùng" name="area" value=" <?php echo $data['area'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giờ mở cửa</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="hh-mm" name="time_open" value=" <?php echo $data['time_open'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giá từ</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Khoảng giá" name="price_area" value=" <?php echo $data['price_area'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Số điện thoại</label>
				    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Nhập số điện thoại" name="phone" value="<?php echo $data['phone'];?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" autocomplete="off" name="email" value=" <?php echo $data['email'];?>">
				  </div>
				 <div class="form-group">
				    <label for="thumbnail">Ảnh đại diện</label>
				    <input type="file" id="thumbnail" name="thumbnail" value=" <?php echo $data['thumbnail']?>">
				  </div>
				  <div class="form-group">
				    <label for="thumbnail">Chọn danh mục</label>
				  	<?php
				  	$sql = "SELECT category_id FROM shop_category WHERE shop_id = $id";
				  	$results = mysqli_query($conn, $sql);
				  	$catArr = array();
                    if ($results->num_rows > 0) {
                        while($row = $results->fetch_assoc()) {
                        	$catArr[] = $row['category_id'];
                        }
                    }
                    $sql = "SELECT * FROM categories";
// SELECT column_name(s)
// FROM table1
// LEFT JOIN table2 ON table1.column_name = table2.column_name;
                    $results = mysqli_query($conn, $sql);
                    if ($results->num_rows > 0) {
                    	// echo '<select name="shop_id" class="form-control" multiple>';
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            // echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                            $isChecked = in_array($row['id'], $catArr) ? 'checked' : '';
                            echo '<br/><input type="checkbox" name="category_id[]"  value="'.$row['id'].'" '.$isChecked.'>'.$row['name'].'';
                        }
                        // echo '</select>';                
                    }
                    ?>
                   </div>
				  <div>
					  <button type="submit" class="btn btn-primary"> Cập nhập danh mục </button>
					  <a class="btn" href="shop-read.php">Trở lại </a>
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