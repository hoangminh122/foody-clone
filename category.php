
<?php
require ('database.php');
    $id = null;
  if ( !empty($_GET['category_id'])) {
    $id = $_GET['category_id'];
  }

  if ( $id==null || !(is_numeric($id))) {
    header("Location: index.php");
  } else {
      $conn = Database::connect();
      $sql = "SELECT * FROM categories WHERE id = $id";
    $results = mysqli_query($conn, $sql);
    if ($results->num_rows > 0) {
      $category_current = $results->fetch_array();
    }
  }
?>
<?php include 'header.php';?>
<div class="main">
         <div class="discover">
              <div class="section">
                  <ul> 
                     <li><img src="images/F.png" width="25" height="25"><h1 style="font-size:1.5em ">Khám phá</h1></li>
                     <li><a href="">Ở đâu<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Ăn gì<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Sưu tập<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">TV<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Bình luận<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Blogs<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Đặt bàn<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                     <li><a href="">Giao hàng<span style="float:right;font-size:20px;line-height:11px;color:#000">&raquo;</span></a></li>
                  </ul>
              </div>
              <div class="artical">
                  <div class="menu-artical" style="background-color: #d82026; padding-bottom: 10px;">
                    <div class="menu-left">
                        <!-- <a href="" class="action">Mới nhất</a>
                        <a href="">Gần tôi</a>
                        <a href="">Đã lưu</a> -->
                        <img src="images/foody-vn.png" style="background-color: white;margin-bottom: -10px;margin-top: 10px; margin-left: -160px; padding: 2px; ">
                    </div>
                    <div class="menu-right">
                      <!-- <select>-Danh mục-
                        <option>-Danh mục-</option>
                        <?php
                          $sql = "SELECT * FROM categories";
                          $results = mysqli_query($conn, $sql);
                          if ($results->num_rows > 0) {
                              // output data of each row
                              while($row = $results->fetch_assoc()) { 
                                  echo '<option>'.$row['name'].'</option>';
                              }
                            }
                          else{
                              echo "0 results";
                            }

                        ?>
                      </select>
                      <select>-Quận/Huyện-
                        <option>-Quận/Huyện-</option>
                        <option>Tp.Huế</option>
                        <option>Tx.Hương Thủy</option>
                        <option>A Lưới</option>
                        <option>Tx.Hương Trà</option>
                        <option>Nam Đông</option>
                        <option>Phong Điền</option>
                        <option>Phú Lộc</option>
                        <option>Phú Vang</option>
                        <option>Quảng Điền</option>
                      </select> -->
                    </div>
                  </div>
                  <div class="content-category">
                    <!-- <div class="slider">
                      <ul>
                        <?php 
                            $sql = "SELECT * FROM shops";
                            $results = mysqli_query($conn, $sql);
                            if ($results->num_rows > 0) {
                                // output data of each row
                                while($row = $results->fetch_assoc()) { 
                        ?>
                        <li>
                          <a href="detail.php?shop_id=<?php echo $row['id'] ?>">
                            <img src="admin/<?php echo $row['thumbnail']?>>
                            <div class="name-food"><?php echo $row['name'] ?></div>
                            <div class="address-store"><?php echo $row['address'] ?></div>
                            <div class="comment"><?php echo $row['time_open'] ?></div>
                            <div class="">
                                <p></p>
                                <p></p>
                            </div>
                          </a>
                        </li>
                        <?php
                                }
                              }
                            else{
                                echo "0 results";
                              }
                         ?>
                        <li><a href=""><img src="images/tra-sua.jpg">
                            <div class="name-food">Cháo Vịt Thuận</div>
                            <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                            <div class="comment"></div>
                            <div class="">
                                <p></p>
                                <p></p>
                            </div>
                        </a>
                      </li>
                       
                      </ul>
                    </div> -->
                      <div class="content-category-left">
                        <ul>
                             <?php
                                $sql = "SELECT shop_id FROM shop_category WHERE category_id = $id";
                                $results = mysqli_query($conn, $sql);
                                $catArr = array();
                                if ($results->num_rows > 0) {
                                  while($row = $results->fetch_assoc()) {
                                    $catArr[] = $row['shop_id'];
                                  }
                                }
                                $sql = "SELECT * FROM shops WHERE id IN (".implode(",",$catArr).")";
                                $results = mysqli_query($conn, $sql);
                                if ($results->num_rows > 0) {
                                    while($row = $results->fetch_assoc()) {
                                     
                            ?>
                            <li>
                              <a href="detail.php?detail_id=<?php echo $row['id'] ?>">

                                <?php if($row['thumbnail']) { ?>
                                  <img src="admin/<?php echo $row['thumbnail']?>" alt="foody-albummax_.jpg" style="width:300px;height: 180px; margin: 10px;">
                                  <?php } else { ?>
                                    <img src="images/update.png" style="width:300px;height: 180px; margin: 10px;">
                                <?php } ?>
                                <div class="content-img">
                                      <div class="name-food"><?php echo $row['name'] ?></div>
                                      <div class="address-store"><?php echo $row['address'] ?></div>
                                      <div class="comment"><?php echo $row['time_open'] ?></div>
                                </div>
                              </a>
                            </li>
                            <?php
                                    }
                                  } else{
                                    echo "0 results";
                                  }
                             ?>
                        </ul>
                      </div>
                      
                     <!--  <div class="adv">
                        <img src="images/burger.jpg" style="width: 200px;">
                      </div> -->
                  </div>
              </div>
         </div>   
          <?php include 'footer.html' ?>
</div>
</body>
</html>