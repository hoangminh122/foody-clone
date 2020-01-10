<?php 
session_start();
require 'database.php';
$loginSuccess = TRUE;
if ( !empty($_POST)) {
	// keep track post values
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	// insert data
	$conn = Database::connect();
	$sql = "SELECT * FROM users
	WHERE email = '$email' AND password = '$password'";
	var_dump($sql);
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		// output data of each row
		$user = $results->fetch_array();
		$_SESSION['userlogged']= $user;
		header("Location: index.php");
	} else {
			$loginSuccess= False;
		}
}

?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<title>DEMO_FOODY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="media/css/bootstrap.min.css">
	<script src="media/js/jquery.min.js"></script>
	<script src="media/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="media/built/css/login_signup.css">
	<style type="text/css">
		body{
			padding: 5px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="header-line"></div>
        <a href="index.php">
            <div class="wrapper">
            </div>
        </a>
    </nav>
	<div class="Container">
		<div style="">
			<div class="row">
					<div class="col-md-offset-4 col-md-4 form">
						<div> <h3 class="title"> Đăng nhập FDID </h3> </div>
						<form method="POST" >
							<fieldset>
								<a class="btn btn-lg btn-success btn-block" style="overflow: hidden;background-color:#4066b0;margin-bottom: 10px;"> ĐĂNG NHẬP BẰNG FACEBOOK
		                        </a>
		                        <a class="btn btn-lg btn-success btn-block" style="overflow: hidden;background-color:#D34836;margin-bottom: 10px;"> ĐĂNG NHẬP BẰNG GOOGLE
		                        </a>
		                        <div class="text">
		                        	<?php if($loginSuccess==False){ ?>
									<div style="color:red;"> Login fail, please try again! </div>
									<?php } ?>
		                            <span>hoặc bằng email</span>
		                        </div>
						        <div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-user"></span>
									</span>
							          <input type="email" name="email" class="form-control" required="" placeholder="Email">
							       
						        </div>
						        <div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-lock"></span>
									</span>
							          <input type="password" name="password" class="form-control" required="" placeholder="Mật khẩu" id="password">
						        </div>
						        <div class="checkbox">
									<label style="float:left;">
										<input type="checkbox"> Lưu mật khẩu
									</label>
		                        	<span style="float:right;"> <a href="signup.php" class="link"> Quên mật khẩu </a> </span>
		                        </div>
						        <div style="clear:both;float:left;width:100%;margin-top:15px;">
		                            <input type="submit" value="Đăng nhập" id="bt_submit" class="btn btn-lg btn-success btn-block" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">
		                        </div>
		                        <div class="p">
		                        	<p> Bạn đã có tài khoản tại Foody.vn?<a href="signup.php" class="link"> Đăng ký </a> </p>
		                        </div>
							</fieldset>
						</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">
        <div class="wrapper-footer">
             <ul class="language">
                <li>
                    <a href="href" title="vn" >
                        Vietnamese
                    </a>
                </li>
                <li>
                    <a href="#href" title="en">
                        English
                    </a>
                </li>
   			 </ul>
   			 <span>©2018 Foody Corporation. Lầu 8, Tòa nhà Jabes 1, 244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, TP.HCM</span>
   			 <span style="margin-bottom:5px;">Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</span>
        </div>
    </footer>
</body>
</html>