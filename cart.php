<?php 	
	// Thêm giỏ hàng
	@session_start();
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
			$count = count($_SESSION['cart']);
			$flag = false;
			for ($i = 0; $i < $count; $i++){
				if($_SESSION['cart'][$i]['id']==$id){
					$_SESSION['cart'][$i]['number']+=1;
					$flag = true;
					break;
				}
			}
			if($flag == false){
				$_SESSION['cart'][$count]['id'] = $id;
				$_SESSION['cart'][$count]['number'] = 1;
			}
		}
		else
		{
			$_SESSION['cart'] = array();
			$_SESSION['cart'][0]['id'] = $id;
			$_SESSION['cart'][0]['number'] = 1;

		}
	}
	//Xóa giỏ hàng
	if(isset($_GET['del'])){
		$del = $_GET['del'];
		if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])){			
			for ($i = 0; $i < count($_SESSION['cart']); $i++){
				if($_SESSION['cart'][$i]['id']==$del){
					unset($_SESSION['cart'][$i]);				
					break;
				}
			}			
		}
	
	}
	// Cập nhật giỏ hàng
	if(isset($_POST['submit']))
	{
	 foreach($_POST['qty'] as $key=>$value)
	 {

	  if(($value == 0) and (is_numeric($value)))
	  {
	   unset ($_SESSION['cart'][$key]);
	  }
	  elseif(($value > 0) and (is_numeric($value)))
	  {
	   $_SESSION['cart'][$key]['number']=$value;
	  }
	 }
	 header("location:cart.php");
	}
	
?> 
<?php include'header.php' ?>   
    <section>
        <div class="container">
           <div class="row">
              <div class="col-xs-12 col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">Danh mục sản phẩm</div>
						<ul class="nav nav-pills nav-stacked">
							<!-- <?php 
							include 'menu_left.php';
							
						 ?>	 -->
						</ul>
					</div>
					<div class="promotion row">
						<a href=""><img class="img-responsive" src="images/quangcao1.jpg" alt="Quang cao 1" style="width: 100%;"/></a>
						<!-- <a href=""><img class="img-responsive" src="images/quangcao2.jpg" alt="Quang cao 1" style="width:50%;height: 200px;"/></a> -->
					</div>
                    
              </div>
              <div class="col-xs-12 col-md-9">
				<div class="panel panel-primary panel-product ">
					<div class="panel-heading" style="color: blue;">GIỎ HÀNG CỦA BẠN</div>
					<div class="row product_detail">
						<div class="col-xs-12 col-md-12">
							<h5 style="float:left;color:#777">Bạn có 
							<span style="color:black">
							<?php 
							$sosanpham = 0;		              
		                	if(isset($_SESSION['cart']))
		                		{
		                			$sosanpham = count($_SESSION['cart']);
		                			echo $sosanpham;		                			
		                		}
		                	else 
		                		{
		                			echo '0';
		                		} 
							?> 
							</span>sản phẩm trong giỏ hàng</h5><br/>
		                	<form action="cart.php" method="post">
		                		<?php 
								if ($sosanpham!=0) {
																
							 	?>
								<table class="table table-striped table-bordered">
					              <thead>
					                <tr >
					                  <th style="text-align: center;">Hình ảnh</th>
					                  <th style="width: 25%;text-align: left;">Tên sản phẩm</th>
					                  <th style="width: 10%;">Giá</th>
					                  <th style="width: 7%;">Số lượng</th>
					                  <th>Tổng cộng</th>			                 
					                </tr>
								  </thead>
								 
					              <tbody>
									   <!-- demo -->
								  <!-- <tr class="warning">
								  	<td>
									  <img src="http://localhost:8080/develop/admin/uploads/cach-nau-bun-mam-thom-ngon-khong-khac-gi-ngoai-hang.jpg" class="img-responsive image_product"  alt="image product">
									</td>
									
									<td> Bún Mắm Lạc Long Quân
							              	<br>
							                <a class="btn" href="">Xóa</a>
									</td>
									<td>
										<td style="text-align: right;">10000đ</td>';		              					              	
													<td width="100px">
													<input type="text" name="df" class="form-control" value="1231313">
										</td>
									
									</td>
									<td>
										35434535
								    </td>

								  </tr> -->
								  <!-- end demo -->
								  
					              <?php
					              	//require 'admin/database.php';
					              	$pdo = Database::connect();	
					              	$total = 0;
					              	for ($i = 0; $i < count($_SESSION['cart']); $i++){						              		          		              			            
							              	$sql = 'SELECT * FROM shops WHERE id='.$_SESSION['cart'][$i]['id'];
							              	foreach ($pdo->query($sql) as $row){
							              		echo '<tr style="background: #f8f8f8;border: 1px solid #e6e6e6;" class="warning style="background: #eee;">';
							              			echo  '<td style="text-align: center;">';
							              			echo '<img style=" width: 55px;" src="admin/uploads/'.$row['thumbnail'].'" class="img-responsive image_product"  alt="image product">';
							              			echo '</td>';		              			
							              			echo '<td style="text-align: left;color:black">'.$row['name'];
							              			// echo '<br>';
							              			// echo '<a class="btn" href="cart.php?del='.$row["id"].'">Xóa</a>';
							              			echo '</td>';		              			
							              			echo '<td style="text-align: center;">'.number_format((int)$row['price_area']).'đ</td>';		              					              	
							              			echo '<td  >';
							              			echo '<input style=" width: 70px;text-align: center;" type="text" name="qty['.$i.']" class="form-control" value="'.$_SESSION['cart'][$i]['number'].'">';
							              			echo '</td>';	
							              			echo '<td style="text-align: center;">';
							              			$money = (int)$row['price_area']*$_SESSION['cart'][$i]['number'];
							              			$total +=$money;
							              			echo number_format($money);
													echo 'đ</td>';
													echo  '<td>';
													echo '<a class="btn" href="cart.php?del='.$row["id"].'" style="color: #ccc;">Xóa</a>';
							              			echo '</td>';  		              			
							              		echo '</tr>';
							              	}
							            
					              	}
					              	Database::disconnect();	
					               ?>
					              </tbody>
				            </table>
						</div>						
						<div class="col-xs-12 col-md-12" style="float:right;margin-top: 3%;">
												
							<div class="info_right">
								<span style="color:#959595">Tổng tiền:</span> <span class="" style="margin-left:50%"><?php echo number_format($total);  ?>đ</span><br>
								<span style="color:#959595;background:#fbf9d8;font-size: 13px;padding: 4px 10px;" ><span style="color:#f29494">(*) </span>Nhập mã voucher ở bước hoàn tất</span><br/>
								<span style="color:#959595">Tổng thanh toán:</span> <span class="" style="margin-left:33%"><?php echo number_format($total);  ?>đ</span> <br>
								<span style="float: right;color: black;">(Đã gồm VAT)</span>
							</div>
							<a style="    padding: 10px;" href="deliverynow.php"><input style="color: white;margin: auto;background: #ae0202;padding: 5px;margin-left: 15%;margin-top: 5%;" type='submit' class="btn btn-success btn_left" name='submit' value='Thực hiện đặt hàng' />		</a>
						</div>	
						<div style=" clear: right;"><div>					
						</form>
						<div class="col-xs-12 col-md-12">
							<a href="index.php" class="btn btn-lg btn-warning btn_left" style="color:blue">Tiếp tục mua hàng</a>							
							<!-- <div class="info_right"> -->
								<!-- <a href="information.php" class="btn btn-lg btn-warning">Thực hiện đặt hàng</a> -->
							<!-- </div> -->
							<?php } ?>
						</div>
						<?php 
							if ($sosanpham==0) {
								echo '<a href="index.php" class="btn btn-lg btn-warning btn_left">Quay lại cửa hàng</a>';
							}
															
						 	?>
					</div>
				</div>
					
			  </div>
           </div>

        </div>
    </section>
	<!-- <?php include'bottom.php' ?> -->