<?php 
include 'page-header.php';
include 'helper.php';
require 'database.php';

$conn = Database::connect();

if ( !empty($_POST)) {
	// keep track post values
	$name = $_POST['name'];
	$address = $_POST['address'];
	$area=$_POST['area'];
	$time_open=$_POST['time_open'];
	$price_area=$_POST['price_area'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	//$thumbnail=$_POST['thumbnail'];
	$thumbnail=substr(uploadFile('thumbnail'),8);
	
	// insert data
	$sql = "INSERT INTO shops (name,address,area,time_open,price_area,phone,email,thumbnail) values('$name', '$address', '$area', '$time_open', '$price_area', '$phone', '$email','$thumbnail')";

	$conn->query($sql);
	
	$shop_id = mysqli_insert_id($conn);//id của shop vừa tạo
	foreach($_POST['category_id'] as $categoryId){
		$sql ="INSERT INTO shop_category (shop_id,category_id) values('$shop_id', '$categoryId')";
		$conn->query($sql);
	}
	// if(){
	// $sql ="INSERT INTO shop_category (shop_id,category_id) values('$shop_id', '$category_id')"
	
	header("Location:shop-read.php");
// 	INSERT  MainTable_Option ( MainTableID, OptionID//   )
// SELECT  d.ID,  o.OptionId
// FROM DodgyOldTable d
//   INNER JOIN Option o ON
//     (d.OptionVal1 = 'Y' AND o.OptionDesc = 'OptionVal1') OR
//     (d.OptionVal2 = 'Y' AND o.OptionDesc = 'OptionVal2') OR
//     (d.OptionVal3 = 'Y' AND o.OptionDesc = 'OptionVal3')
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
			<form method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Tên cửa hàng</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên cửa hàng" name="name" value=" <?php echo !empty($name)?$name:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Địa chỉ</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ" name="address" value=" <?php echo !empty($address)?$address:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Khu vực/Vùng</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên vùng" name="area" value=" <?php echo !empty($area)?$area:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giờ mở cửa</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="hh-mm" name="time_open" value=" <?php echo !empty($time_open)?$time_open:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Giá từ</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Khoảng giá" name="price_area" value=" <?php echo !empty($price_area)?$price_area:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Số điện thoại</label>
				    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Nhập số điện thoại" name="phone" value=" <?php echo !empty($phone)?$phone:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" autocomplete="off" name="email" value=" <?php echo !empty($email)?$email:'';?>">
				  </div>
				  <div class="form-group">
				    <label for="thumbnail">Ảnh đại diện</label>
				    <input type="file" id="thumbnail" name="thumbnail">
				  </div>
				  <div class="form-group">
				    <label >Chọn danh mục</label>
				  	<?php 
                    $sql = "SELECT * FROM categories";
                    $results = mysqli_query($conn, $sql);
                    if ($results->num_rows > 0) {
                    	// echo '<select name="shop_id" class="form-control" multiple>';
                        // output data of each row
                        while($row = $results->fetch_assoc()) {
                            // echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                            echo '<br/><input type="checkbox" name="category_id[]" value="'.$row['id'].'">'.$row['name'];
                        }
                        // echo '</select>';                
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
					  <button type="submit" class="btn btn-primary"> Thêm </button>
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