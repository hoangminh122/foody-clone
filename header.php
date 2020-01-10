<!DOCTYPE html>
<html>
<head>
    <title>Foody</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="media/built/css/reset.css">
  <link rel="stylesheet" type="text/css" href="media/built/css/style-1.css">
  <link rel="stylesheet" type="text/css" href="media/built/css/detail.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
  <link rel="stylesheet" type="text/css" href="media/built/css/style.css">
  <link rel="shortcut icon" type="img/png" href="images/F.png">

  <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.min.css">
  <script type="text/javascript" src="media/js/jquery-1.12.4.js"></script>
  <script type="text/javascript" src="media/js/jquery.slides.min.js"></script>
  <script type="text/javascript" src="media/js/jquery-1.12.4.min.js"></script>
  <script src="owl/dist/owl.carousel.js"></script>
</head>
<body>
  <header class="header">
    <div class="container-topbar">
      <ul class="topbar">
          <?php  
            require_once ('database.php');
            //Get all categories
            $conn = Database::connect();
            $sql = "SELECT * FROM categories";

            $results = mysqli_query($conn, $sql);
            if ($results->num_rows > 0) {
              while($category = $results->fetch_assoc()) {
            ?>
                <li><a href="category.php?category_id=<?php echo $category['id'] ?>" class="<?php echo''.($category['id']==$_GET['category_id'] ?'current':'').''?>" ><?php echo $category['name'] ?></a></li>
              <?php }//end while ?>
          <?php }//end if ?>
      </ul>
    </div>

    <div class="header-toolbar">
      <div class="header-wrapper">
        <a href="index.php" class="logo">
          <img src="images/foody-vn.png" alt="foody.vn">
        </a>
        <div class="root-cate">
          <div class="nav-name">
            <span style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 85px;display: inline-block;">Hà Nội</span>
            <span class="fas fa-sort-down"></span>
          </div>
        </div>
        <div class="root-cate">
          <div class="nav-name">
            <span>Ăn uống</span>
            <span class="fas fa-sort-down"></span>
          </div>
        </div>  
          
        <div class="search-bar-top">
          <form class="searchFormTop" action="" method="">
            <div style="float: left;border: 1px solid #eee;border-right:none; width: 415px;">
              <div class="dropdown">
                <input type="text" id="myInput" onkeyup="myFunction()" title="Type in a name" name="" placeholder="Địa điểm, món ăn, loại hình..." style="vertical-align: middle;">
                <ul id="myUL" class="dropdown-content" style="width:42%">
                    <?php
                      $conn = Database::connect();
                      $sql = "SELECT * FROM shops";
                      $results = mysqli_query($conn, $sql);
                      if ($results->num_rows > 0) {
                        while($shop_data = $results->fetch_assoc()) {
                    ?>
                      <li style="margin-bottom:1.8px"><a href="detail.php?detail_id=<?php echo $shop_data['id'] ?>"> <img src="admin/uploads/<?php echo $shop_data['thumbnail']?>" style="width:50px;weight:50px" alt="foody-albummax_.jpg"/><span style="margin-left:5px;font-style: normal;font-weight: 600;font-family: none;"><?php echo $shop_data['name']?></span></a></li>
                    <?php }
                        }
                      else
                    ?>
                </ul>
              </div>
              
            </div>
          </form>
          <a href="" class="ico-search">
            <span class="fas fa-search"></span>
          </a>
        </div>
        <div class="menu-header">
          <ul class="nav-place-menu">
            <li>
              <a href="#">
                <span class="fas fa-bars"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="header-apps">
          <a href="#" target="_blank">
            <span class="fas fa-mobile-alt"></span>
            Apps
          </a>
        </div>
        <div class="nav-place">
          <div class="account-manage">
            <a href="login.php" class="login-new">
              <span>Đăng nhập</span>
            </a>
          </div>
          <div class="NotificationCtrl" style="position: relative;float: left;">
            <div style="float: right;">
              <div class="notificationBox">
                
              </div>
            </div>
          </div>
          <div class="nav-add-buttons">
            <a>+</a>
          </div>
          <div class="language-dropdown-container">
            <a href="#" class="language-dropdown-btn">
              <img src="images/vn.png">
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>