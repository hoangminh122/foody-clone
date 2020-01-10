
<?php include 'header.php';?>
   <div class="wraper"> 
     <div class="slide" style="z-index:0">
         <div class="drop-slide">
             <div class="myslide">  
                <div class="owl-carousel owl-theme">
                <div><img src="images/foody1.png"></div>
                <div><img src="images/foody2.jpg"></div>
                <div><img src="images/foody3.jpg"></div>
                <div><img src="images/foody4.jpg"></div>
                <div><img src="images/foody5.jpeg"></div>
                <div><img src="images/foody6.png"></div>
                <div><img src="images/foody7.png"></div>
                
             </div>

            <script type="text/javascript">
              $('.owl-carousel').owlCarousel({
                loop:true,
                margin:2,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
            </script>

                <div class="recomment">
                  <h1>Kens Grill Restaurant</h1>
                  <p>Buffet Lẫu & Nướng</p>
                </div>  
             </div>    
            <!--  <div class="myslide">
                <a href="" class="picture"><img src="images/foody-ice.jpg"/></a>
                <div class="recomment">
                  <h1>3CE Food-Các món ăn vặt</h1><br />
                  <p>Lưu lại triển cùng cá cứng nào</p>
                </div>
             </div>  
             
                <button id ="next" > &raquo;</button>
                <button id ="prev" > &laquo;</button> -->
         </div>

     </div>
     

     <!-- <div class="main">
         <div class="ship">
            <div class="menu-ship">
                 <div class="hero"><img src="images/F.png" width="40" height="40"><h2>Giao tận nơi</h2></div>
                 <div class="grid">
                 <ul>
                       <li class="active"><a href="">Deal hôm nay</a></li>
                       <li><a href="">Tất cả</a></li>
                       <li><a href="">Cơm trưa</a></li>
                       <li><a href="">Đồ ăn</a></li>
                       <li><a href="">Thức uống</a></li>
                       <li><a href="">Tráng miệng</a></li>
                       <li><a href="">Homemade</a></li>
                       <li><a href="">Vỉa hè</a></li>
                 </ul>
                 </div>  
                 <div class="set">
                   <select>Vừa đặt
                     <option>Đặt nhiều</option>
                     <option>Gần tôi</option>
                     <option>Vừa đặt</option>
                   </select>
                 </div>   
            </div>     
            <div class="sub-menu-ship">
                <ul>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro">Nhà hàng</div>
                  </a></li>
              </ul>
            </div>  
         </div>
         <div class="promotion">
            <div class="menu-promotion">
                 <div class="block"><img src="images/F.png" width="40" height="40"><h2>Đặt bàn ưu đãi</h2></div>
                 <div class="options">
                     <div class="all">
                       <select>Tất cả
                         <option>Tất cả</option>
                         <option>Gia đình/Nhóm hội</option>
                         <option>Công ty/Tiếp khách</option>
                         <option>Sinh nhật</option>
                         <option>Cặp đôi</option>
                         <option>Món Âu Mỹ</option>
                         <option>Món Việt</option>
                         <option>Beer/Bar</option>
                         <option>Cafe</option>
                         <option>Món chay</option>
                         <option>Spa</option>
                         <option>Special Offers</option>
                       </select>   
                     </div>  
                     <div class="highlights">
                       <select>Nổi bật
                         <option>Nổi bật</option>
                         <option>Đặt nhiều</option>
                         <option>Gần tôi</option>
                         <option>Vừa đặt</option>
                       </select>
                     </div>   
                  </div>   
            </div>     
            <div class="sub-menu-promotion">
                <ul>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><img src="images/dollar-tag.png" height="20" width="20"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><h5>Nhà hàng</h5></div>
                  </a></li>
                  <li><a href="">
                    <img src="images/tra-sua.jpg" width="205" height="150">
                    <div class="name-food">KFC-Big C Huế</div>
                    <div class="address-store">181 Bà Triệu, P.Phú Hội, tp.Huế</div>
                    <div class="intro"><h5>Nhà hàng</h5></div>
                  </a></li>
              </ul>
            </div>  
         </div>

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
                  <div class="menu-artical">
                    <div class="menu-left">
                        <a href="" class="action">Mới nhất</a>
                        <a href="">Gần tôi</a>
                        <a href="">Đã lưu</a>
                    </div>
                    <div class="menu-right">
                      <select>-Danh mục-
                        <option>-Danh mục-</option>
                        <option>Sang trọng</option>
                        <option>Buffet</option>
                        <option>Nhà hàng</option>
                        <option>Ăn vặt/vỉa hè</option>
                        <option>Ăn chay</option>
                        <option>Cafe/Dessert</option>
                        <option>Quán ăn</option>
                        <option>Bar/Pub</option>
                        <option>Quán nhậu</option>
                        <option>Beer Club</option>
                        <option>Tiệm bánh</option>
                        <option>Tiệc tận nơi</option>
                        <option>Shop online</option>
                        <option>Giao cơm văn phòng</option>
                        <option>Khu ẩm thực</option>
                      </select>
                      <select>-Ẩm thực-
                        <option>-Ẩm thực-</option>
                        <option>Miền Bắc</option>
                        <option>Trung Hoa</option>
                        <option>Miền Trung</option>
                        <option>Miền Nam</option> 
                        <option>Ấn Độ</option>
                        <option>Thái Lan</option>
                        <option>Ý</option>
                        <option>Pháp</option>
                        <option>Đức</option>
                        <option>Nhật Bản</option>
                        <option>Hàn Quốc</option>
                        <option>Thụy Sĩ</option>
                        <option>Tây Nguyên</option>
                        <option>Singapore</option>
                        <option>Malaysia</option>
                        <option>Brazil</option>
                        <option>Mỹ</option>
                        <option>Tây Ban Nha</option>
                        <option>Indonesia</option>
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
                      </select>

                    </div>
                  </div>
                  <div class="slider">
                    <ul>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                      <li><a href=""><img src="images/tra-sua.jpg" width="205" height="150">
                          <div class="name-food">Cháo Vịt Thuận</div>
                          <div class="address-store">94 Bùi Thi Xuân-tp Huế,Huế</div>
                          <div class="comment"></div>
                          <div class="">
                              <p></p>
                              <p></p>
                          </div>
                      </a></li>
                    </ul>
                  </div>
              </div>
         </div>      
     </div> -->
     <div class="main">
         <div class="discover">
         <div class="col-sm-3"></div>
              <div class="section" >
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
              <div class="artical "  style="width: 79%;">
                  <div class="menu-artical" style="background-color: #d82026; padding-bottom: 10px;">
                    <div class="menu-left">
                        <!-- <a href="" class="action">Mới nhất</a>
                        <a href="">Gần tôi</a>
                        <a href="">Đã lưu</a> -->
                        <img src="images/foody-vn.png" style="background-color: white;margin-bottom: -30px; margin-left: -160px; padding: 2px; ">
                    </div>
                    <div class="menu-right">
                      <select>-Danh mục-
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
                      </select>
                    </div>
                  </div>
                  <div class="content" style="margin-left:0px">
                    <div style="width: 100%;float: left;">
                      <ul>
                          <?php 
                              $sql = "SELECT * FROM shops ";
                              $results = mysqli_query($conn, $sql);
                              if ($results->num_rows > 0) {
                                  // output data of each row
                                  while($row = $results->fetch_assoc()) { 
                          ?>
                          <li style="background: white;width:33%;margin-left:2px;height:335px">
                            <a href="detail.php?detail_id=<?php echo $row['id'] ?>">
                              <?php if($row['thumbnail']) { ?>
                                  <img src="admin/uploads/<?php echo $row['thumbnail']?>" alt="foody-albummax_.jpg" style="width:99%;height: 75%; margin-top:2px;">
                                  <?php } else { ?>
                                    <img src="images/update.png" style="width:300px;height: 180px; margin: 10px;">
                              <?php } ?>
                              <div class="content-img">
                                  <div class="name-food" style="font-size: larger;font-weight: 700;color:#333;"><?php echo $row['name'] ?></div>
                                  <div class="address-store" style="font-size: small;color: gray;"><?php echo $row['address'] ?></div>
                                  <div class="comment" style="font-size: 12px;font-weight: 700;color:#333"><i style="color: red;margin-right: 2px;" class="fa fa-tag"></i><?php echo $row['area'] ?></div>
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
     
                      </ul>
                    </div>
                     
                  </div>
              </div>
              
     
        </div>
      </div>   
      <?php include 'footer.html' ?>
</body>
</html>