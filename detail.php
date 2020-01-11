
<?php include 'header.php'; ?>
<?php
$conn = Database::connect();
$sql = "SELECT * FROM shops WHERE id=".$_GET['detail_id'];
$results = mysqli_query($conn, $sql);
if ($results->num_rows > 0) {
	$product = $results->fetch_array();					
}
?>
	<div class="pn-microsite">
		<div class="micro-content">
			<div class="micro-header clearfix">
				<div class="main-images fl_left">
					<div class="img" style="height: 275px;">
						<a href="#">
							 <?php if($product['thumbnail']) { ?>
                                  <img src="admin/uploads/<?php echo $product['thumbnail']?>" alt="foody-albummax_.jpg" style="width:500px;height: 275px;border:0;">
                                  <?php } else { ?>
                                    <img src="images/update.png" style="width:500px;height: 275px;border:0; padding: 3px;">
                                <?php } ?>
						</a>
					</div>
				</div>
				<div class="main-information fl_left">
					<div class="res-common">
						<div class="breadcrum"></div>
						<div class="main-info-title">
							<span class="main-info-title-contracted fl_left">
								<span class="fas fa-check-circle"></span>
							</span>
							<h1 style="width: 600px;" class="fl_left"><?php echo $product['name']?></h1>
							<div class="clearfix"></div>
							<div class="category">
								<div class="category-items fl_left" style="max-width: 200px;">
									<a href="#" title="category-items">Buffet</a>
								</div>
								<div class="category-cuisines fl_left">
									<div class="cuisines-separator fl_left">-</div>
									<div class="cuisines-list fl_left" style="margin-right: 5px;max-width: 150px;padding-top:2px;">
										<a href="#"><?php echo $product['email']?></a>
									</div>
									<div class="audiences fl_left" style="max-width: 150px;margin-top:3px;">
										<?php echo $product['phone']?>
									</div>
								</div>
							</div>
						</div>
						<div class="res-summary-point"></div>
						<div class="disableSection">
							<div class="res-common-add">
								<span class="fas fa-location-arrow locationicon"></span>
								<span>
									<a href="" target="_blank">
										<span><?php echo $product['address']?></span>
										,
									</a>
								</span>
								<a href="">
									<i class="fas fa-map"></i>
								</a>
								<span>
									<a href="" title="Quận Đống Đa">
										<span><?php echo $product['area']?></span>
									</a>
								</span>
								,
								<span>Hà Nội</span>
							</div>
							<div class="res-common-price">
								<div class="micro-timesopen">
									<span class="far fa-clock houricon"></span>
									<!-- <span class="itsopen" title="Chưa mở cửa">Đang mở cửa</span> -->
									<span> <?php echo $product['time_open']?></span>
									<span class="fas fa-exclamation-circle"></span>
								</div>
								<div class="res-common-minmaxprice">
									<span class="fas fa-tag minmaxpriceicon"></span>
									<span><?php echo $product['price_area']?></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="micro-main-menu fl_left">
			<div class="tool-bar">
				<!-- <ul class="list-tool">
					<li class="active">
						<a href="">Trang chủ
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span>555</span>
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span>555</span>
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
					<li>
						<a href="">Trang chủ
							<span class="fas fa-angle-right" style="float: right; font-size: 14px;"></span>
						</a>
					</li>
				</ul> -->
				<div class="nav-banner">
					<a href="#">
						<img src="images/foody.jpg" alt="foody.jpg" width="160">
					</a>
				</div>
			</div>
		</div>
		<div class="micro-right fl_right">
			<!-- <div class="right-tool-bar clearfix">
				<ul class="micro-act-btns">
					<li>
						<a href="">
							<i class="fas fa-phone"></i>
							Gọi điện thoại
						</a>
					</li>
					
				</ul>
			</div> -->

			<div class="micro-main-content" style="clear: both; position: static;min-height:500px;">
				<div class="banner-slide">
					<a href="" title="Nhà Hàng Phương Nam - Món Ngon Miền Nam" target="_blank">
						<img src="images/foody-phuongnam.jpg" alt="images/foody-phuongnam.jpg" width="995" height="125">
					</a>
				</div>
				<!-- <div class="microsite-table-book">
					<div class="tb-title">
						<h2 style="font-size: 16px;padding: 5px 0;cursor: pointer;">
							<a href="" title="Ưu đãi khi đặt chỗ" target="_blank" style="color: #f37934;">Đặt chỗ</a>
						</h2>
					</div>
					<div class="tb-offers-box">
						<div class="tb-content">
							<div class="tb-offer-item">
								<div class="tb-item-left">
									<p>12/05/2018</p>
									<span class="fas fa-angle-double-right" style="color: #2aaf11;"></span>
								</div>
								<div class="tb-item-mid">
									<a href="" style="color:#277bb9;" class="tb-oi-time">
										<span class="">Ăn trưa</span>
										-
										<span class="">Giảm 15%</span>
									</a>
									<a href="" class="tb-shorttitle">
										<span> T2 - T6, Giảm 15% Buffet trưa giá 339k còn 289k</span>
									</a>
								</div>
								<div class="tb-item-right">
									<span class="">Ưu đãi không áp dụng ngày đang chọn. Chọn ngày khác.</span>
								</div>
							</div>
							<div class="tb-offer-item">
								<div class="tb-item-left">
									<p>12/05/2018</p>
									<span class="fas fa-angle-double-right" style="color: #2aaf11;"></span>
								</div>
								<div class="tb-item-mid">
									<a href="" style="color:#277bb9;" class="tb-oi-time">
										<span class="">Ăn trưa</span>
										-
										<span class="">Giảm 15%</span>
									</a>
									<a href="" class="tb-shorttitle">
										<span> T2 - T6, Giảm 15% Buffet trưa giá 339k còn 289k</span>
									</a>
								</div>
								<div class="tb-item-right">
									<span class="">Ưu đãi không áp dụng ngày đang chọn. Chọn ngày khác.</span>
								</div>
							</div>
							<div class="tb-offer-item">
								<div class="tb-item-left">
									<p>12/05/2018</p>
									<span class="fas fa-angle-double-right" style="color: #2aaf11;"></span>
								</div>
								<div class="tb-item-mid">
									<a href="" style="color:#277bb9;" class="tb-oi-time">
										<span class="">Ăn trưa</span>
										-
										<span class="">Giảm 15%</span>
									</a>
									<a href="" class="tb-shorttitle">
										<span> T2 - T6, Giảm 15% Buffet trưa giá 339k còn 289k</span>
									</a>
								</div>
								<div class="tb-item-right">
									<span class="">Ưu đãi không áp dụng ngày đang chọn. Chọn ngày khác.</span>
								</div>
							</div>
							<div class="tb-offer-item">
								<div class="tb-item-left">
									<p>12/05/2018</p>
									<span class="fas fa-angle-double-right" style="color: #2aaf11;"></span>
								</div>
								<div class="tb-item-mid">
									<a href="" style="color:#277bb9;" class="tb-oi-time">
										<span class="">Ăn trưa</span>
										-
										<span class="">Giảm 15%</span>
									</a>
									<a href="" class="tb-shorttitle">
										<span> T2 - T6, Giảm 15% Buffet trưa giá 339k còn 289k</span>
									</a>
								</div>
								<div class="tb-item-right">
									<span class="">Ưu đãi không áp dụng ngày đang chọn. Chọn ngày khác.</span>
								</div>
							</div>
							<div class="tb-offer-item">
								<div class="tb-item-left">
									<p>12/05/2018</p>
									<span class="fas fa-angle-double-right" style="color: #2aaf11;"></span>
								</div>
								<div class="tb-item-mid">
									<a href="" style="color:#277bb9;" class="tb-oi-time">
										<span class="">Ăn trưa</span>
										-
										<span class="">Giảm 15%</span>
									</a>
									<a href="" class="tb-shorttitle">
										<span> T2 - T6, Giảm 15% Buffet trưa giá 339k còn 289k</span>
									</a>
								</div>
								<div class="tb-item-right">
									<span class="">Ưu đãi không áp dụng ngày đang chọn. Chọn ngày khác.</span>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<div class="microsite-gallery">
					<div class="microsite-professional-photo">
						<div class="microsite-box-heading">
							<a href="" style="color: #333;">Thực đơn</a>
						</div>
						<div class="prof-photos-items">
							<?php
								$conn = Database::connect();
								$sql = "SELECT * FROM menus WHERE shop_id=".$_GET['detail_id'];
                              	$results = mysqli_query($conn, $sql);
                              if ($results->num_rows > 0) {
                                  // output data of each row
                                  while($row = $results->fetch_assoc()) { 


							?>
							<div class="microsite-professional-photo-item" style="background:#eeeeee">
								<a href="detail-menu.php?menu_id=<?php echo $row['id'] ?>">
									<?php if($row['thumbnail']) { ?>
									<img src="admin/uploads/<?php echo $row['thumbnail']?>" alt="foody-albummax_.jpg" style="height:150px;width:100%;">
									<?php } else { ?>
										<img src="images/logo.png" style="height:150px;width:100%;">
									<?php } ?>
									<div class="content-img" style="">
		                                  <div class="name-food" style="color:black">
		                                  	<b><?php echo $row['name'] ?></b></div>
		                                  <div class="address-store" style="color:#aaa"><?php echo $row['price'] ?> đ</div>
                              		</div>
								</a>
							</div>
							<?php
								}
							}
							?>
						</div>
					</div>

					<!-- <div class="microsite-box">
						<div class="microsite-box-heading">
							<div class="title">
								Albums
							</div>
						</div>
						<div class="microsite-box-album">
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
							<div class="micro-album">
								<div class="img-box">
									<a href="">
										<img src="images/foody-upload.jpg" alt="foody-upload.jpg" width="150" height="150">
									</a>
								</div>
								<div class="name">
									<a href="">Video</a>
								</div>
								<div class="summary">
									<span>3</span>
									video
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>

	</div>
	<?php include 'footer.html' ?>
</body>
</html>