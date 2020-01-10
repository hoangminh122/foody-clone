<?php include 'page-header.php';?>
    <!-- Left Panel -->
    <?php include 'page-panel.php'; ?>
    <!-- Right Panel -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>QUẢN TRỊ CỬA HÀNG</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a class="btn btn-primary" href="shop-create.php"> Thiết lập cửa hàng </a></li>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Cửa hàng</strong>
                            </div>
                            <div class="card-body">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Tên</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                    <th>Hình ảnh</th>
                                    <th>Chức năng</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php 
                                    include 'database.php';
                                    $conn = Database::connect();
                                    $sql = "SELECT * FROM shops";
                                    $results = mysqli_query($conn, $sql);
                                    if ($results->num_rows > 0) {
                                        // output data of each row
                                        while($row = $results->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<td>'. $row['name'] . '</td>';
                                            echo '<td>'. $row['address'].'</td>';
                                            echo '<td>'. $row['phone'] . '</td>';
                                            if($row['thumbnail']) {
                                            echo '<td> <img src="'. $row['thumbnail'] .'" style="width:200px;height:200px;"</td>';
                                            }
                                            else {
                                            echo '<td> <img src="../images/update.png" style="width:200px;height:200px;"</td>';
                                            }
                                            echo '<td width=250>';
                                            echo '<a class="btn btn-success" href="shop-update.php?id='.$row['id'].'">Chỉnh sửa</a>';
                                            echo '&nbsp;';
                                            echo '<a class="btn btn-danger" href="shop-delete.php?id='.$row['id'].'">Xóa</a>';
                                            echo '</td>';
                                            echo '</tr>';
                                        }               
                                    }else {
                                        echo "0 results";

                                    }
                                    ?>
                                    

                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


     <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
