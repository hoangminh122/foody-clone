<!DOCTYPE html>
<html>
<head>
	<title>Deliverynow</title>
  	<link rel="shortcut icon" type="images/png" href="images/now.vn.png">
	<meta charset="utf-8">
	<link rel="stylesheet" href="media/css/bootstrap.min.css">
	<script src="media/js/jquery.min.js"></script>
	<script src="media/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="deliverynow.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
 	<script type="text/javascript" src="media/js/jquery.slides.min.js"></script>
	<style type="text/css">

	</style>
	
	<script type="text/javascript">
		/*
		$(window).on("scroll", function() {
	var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
	    // when scroll to bottom of the page  
	}
	});
		$(document).scroll(function() {
    $('#menu').toggle($(this).scrollTop() > 10);
	});
		
		Var offset=10;
	$(document).ready(function(){
    $(window).scroll(function(){
       If($(this).scrollTop>offset){
           ($(".navbar-fixed").css({"position":"fixed", "left":0, "top":0
       });
	});
};
		*/
		window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar-fixed").style.top = "0";
    } else {
        document.getElementById("navbar-fixed").style.top = "35px";
    }
}
	</script>

  	<script type="text/javascript">
		$(document).ready(function(){
    		$('.news').each(function() {
        var elem = $(this);
        setInterval(function() {
            if (elem.css('visibility') == 'hidden') {
                elem.css('visibility', 'visible');
	        } else {
	            elem.css('visibility', 'hidden');
	        }    
	    }, 500);
	});
 });
	</script>
</head>
<body>
	<div class="container-topbar">
		<div class="topbar">
			<a href="" >Khám Phá</a>
			<a href="">Đặt Bàn</a>
			<a href="" style="background: #fff;color: black;">Đặt Giao Hàng</a>
			<a href="">Đi Chợ 
				<img src="images/sb-new.gif" style="margin-top: -20px;"" class="news">
			</a>
			<a href="">Làm Đẹp</a>
			<a href="">Du Lịch</a>
			<a href="">FoodyPOS</a>
			<a href="">Giảm Giá</a>
			<ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Icon+Time</a></li>
			        <li > <a href="#">icon</a></li>
			    </ul>
		</div>
	</div>
	<div>
    <nav class="navbar navbar-default" id="navbar-fixed" style="background-color: white; border: none;">
		  <div class="container-fluid">
		  	<div class="container">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">WebSiteName</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active dropdown"><a class="dropdown-toggle dropbox" data-toggle="dropdown" href="#" target="">TP HCM <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="#">Page 1-1</a></li>
			          <li><a href="#">Page 1-2</a></li>
			          <li><a href="#">Page 1-3</a></li>
			        </ul>
			      </li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			      <li><a href="#">Page 2</a></li>
			      <li><a href="#">Page 3</a></li>
			      <li><a href="#">Page 3</a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Tải app</a></li>
			        <li > <a href="#">Đăng nhập</a></li>
			    </ul>
		  	</div>
		  </div>
	</nav>
	<div class="container-fluid">
		<div class="row" style="text-align: center;">
			<img src="images/maxresdefault.jpg" alt="Deliverynow" style="display: block; height:500px;width: 100%; ">
		</div>
		<div class="container" >
			<div class="row" style="border: 1px solid #d7d7d7; background-color: #fff;margin-bottom: 28px; margin-top: 30px ">
				<div class="col-md-3">
					<div> <h4> HOT DEALS TODAY</h4></div>
					<div class="row">  
						<div class="col-md-6" style="padding-left:10%;margin-left: 10px;"> Khu vực </div>
						<div class="col-md-6" style="margin-left: -20%;;"> Danh mục </div>
					</div>
					
					<div class="tab-location" > 
						<ul class="list-unstyled" style="float:left; width: 100%">
							<div><!--Thanh dọc-->
								
							</div>
							<div><!--Thanh ngang--></div>
							<div>
								<!--Content-->
								<div class="scroll">
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
									<li class="local-deal">
										<a href="">Tất cả Deal</a>
										<span >1 deals</span>
									</li>
								</div>
							</div>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					slides-deals
				</div>
			<div class="row">
				Xem thêm
			</div>
			<div class="row">
				Phân loại
			</div>
			<div class="row">
				Quảng cáo
			</div>
			
		</div>
	</div>
	
                     
</body>
</html>