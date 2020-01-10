<?php 
require 'database.php';
$signupSuccess = TRUE;
$signupEmpty=True;
if ( !empty($_POST)) {
	// keep track post values
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$gender = $_POST['gender'];
	
	// insert data
	$conn = Database::connect();
	$sql ="SELECT email FROM users";
	$results = mysqli_query($conn, $sql);
	if ($results->num_rows > 0) {
		while($row = $results->fetch_assoc()) {
			// output data of each row
			if($row['email']==$email)
				$signupSuccess=false;
		}
	}
	else{
		$signupEmpty=false;
	}
	if($signupSuccess == TRUE){
	$sql = "INSERT INTO users(name,lastname,email,password,gender) values('$name', '$lastname' ,'$email', '$password', '$gender')";
	$conn->query($sql);
	header("Location: login.php");
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
     <?php if($signupEmpty==False || $signupSuccess==False){ ?>
			<div class="ablert"> Signup fail, please try again! </div>
				<?php } ?>
	<div class="Container">
		<div style="">
			<div class="row">
					<div class="col-md-offset-4 col-md-4 form">
						<div> <h3 class="title"> Đăng ký </h3> </div>
						<form method="POST" >
							<fieldset>
								<div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-user"></span>
									</span>
							          <input type="text" name="name" class="form-control" required="" placeholder="Tên">
						        </div>
						        <div class="form-space input-group">
							          <span class="input-group-addon">
							          	<span class="glyphicon glyphicon-user"></span>
							          </span>
							          <input type="text" name="lastname" class="form-control" required="" placeholder="Họ">
						        </div>
						        <div class="form-space">
						        	<div style="float: left;color: #959595;">Giới tính</div>
						        	<select  class="btn btn-default" name="gender">
						        		<option >-Lựa chọn-</option>
						        		<option value="male"> Nam </option>
						        		<option value="female"> Nữ </option>
						        	</select>
						        </div>
						        <div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-envelope"></span>
									</span>
							          <input type="email" name="email" class="form-control" required="" placeholder="Email">
							       
						        </div>
						        <div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-lock"></span>
									</span>
							          <input type="password" name="password" class="form-control" required="" placeholder="Mật khẩu" id="password">
							       
						        </div>
						        <div class="form-space input-group">
									<span class="input-group-addon">
									  <span class="glyphicon glyphicon-lock"></span>
									</span>
							          <input type="password" name="confirm_password" class="form-control" required="" placeholder="Xác nhận mật khẩu" id="confirm_password">
						        </div>
						        <div style="clear:both;float:left;width:100%;margin-top:15px;">
		                            <input type="submit" value="Đăng ký tài khoản" id="bt_submit" class="btn btn-lg btn-success btn-block" style="background-color:#0495ba;font-size: 14px;border-color:#0495ba">
		                        </div>
		                        <div class="p">
		                        	<p> Bạn đã có tài khoản? Vui lòng <a href="login.php" class="link"> Đăng nhập </a> </p>
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
    <script type="text/javascript">
		var password = document.getElementById("password")
  		, confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
		    confirm_password.setCustomValidity("Mật khẩu không khớp");
		  } else {
		    confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	</script>
</body>
</html>