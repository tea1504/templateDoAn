<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <?php include_once(__DIR__.'/style.php');?>
  <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
    <?php include_once(__DIR__ . '/layouts/header.php');?> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 position-static">
                <?php include_once(__DIR__ . '/layouts/sidebar.php');?>
            </div>
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h1 class="h3 mb-0 text-gray-800 mt-2" >Dashboard</h1>
                <!-- Block content -->
                <div class="container-fluid">
                    <div class="row">
                     <!-- Tổng số mặt hàng -->
                        <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-primary mb-2 mt-2 ">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoSanPham_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số mặt hàng</div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm form-control" id="refreshBaoCaoSanPham">Refresh dữ liệu</button>
                        </div>
                        <!-- Tổng số khách hàng -->
                        <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-success mb-2 mt-2">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoKhachHang_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số khách hàng</div>
                                </div>
                            </div>
                            <button class="btn btn-success btn-sm form-control" id="refreshBaoCaoKhachHang">Refresh dữ liệu</button>
                        </div>   
                         <!-- Tổng số đơn hàng -->
                         <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-info mb-2 mt-2">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoDonHang_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số đơn hàng</div>
                                </div>
                            </div>
                            <button class="btn btn-info btn-sm form-control" id="refreshBaoCaoDonHang">Refresh dữ liệu</button>
                        </div>   
                         <!-- Tổng số chủ đề -->
                         <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-secondary mb-2 mt-2">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoChuDeSanPham_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số chủ đề</div>
                                </div>
                            </div>
                            <button class="btn btn-secondary btn-sm form-control" id="refreshBaoCaoChuDeSanPham">Refresh dữ liệu</button>
                        </div>   
                         <!-- Tổng số khuyến mãi -->
                         <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-danger mb-2 mt-2">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoKhuyenMai_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số khuyến mãi</div>
                                </div>
                            </div>
                            <button class="btn btn-danger btn-sm form-control" id="refreshBaoCaoKhuyenMai">Refresh dữ liệu</button>
                        </div>   
                         <!-- Tổng số bình luận-->
                         <div class="col-sm-6 col-lg-2">
                            <div class="card text-white bg-warning mb-2 mt-2">
                                <div class="card-body pb-0 text-center">
                                    <div class="text-value" id="baocaoBinhLuan_SoLuong">
                                        <h1>0</h1>
                                    </div>
                                    <div>Tổng số bình luận</div>
                                </div>
                            </div>
                            <button class="btn btn-warning text-white btn-sm form-control" id="refreshBaoCaoBinhLuan">Refresh dữ liệu</button>
                        </div>  
                        <div class="row ml-1 mr-1">
                            <!-- Biểu đồ thống kê loại hoa sản phẩm -->
                            <div class="col-sm-6 col-lg-6 mt-3"  style="position:relative; height:100vh; width:80vw">
                                <div class="card border-primary mb-3">
                                    <div class="card-body">
                                        <canvas id="chartOfobjChartThongKeLoaiHoaSanPham" ></canvas>
                                        <div class="mt-4 text-center small"></div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm form-control" id="refreshThongKeLoaiHoaSanPham">Refresh dữ liệu</button>
                                </div> 
                            </div>
                            <!-- Biểu đồ thống kê chủ đề sản phẩm -->
                            <div class="col-sm-6 col-lg-6 mt-3"  style="position:relative; height:100vh; width:80vw">
                                <div class="card border-primary mb-3">
                                    <div class="card-body">
                                        <canvas id="chartOfobjChartThongKeChuDeSanPham"></canvas>
                                        <div class="mt-2 text-center small">
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-info"></i> Referral
                                            </span>
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-primary"></i> Direct
                                            </span>
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-success"></i> Social
                                            </span>
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-info"></i> Referral
                                            </span>                                            
                                            <span class="mr-2">
                                            <i class="fa fa-circle text-info"></i> Referral
                                            </span>  
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm form-control" id="refreshThongKeChuDeSanPham">Refresh dữ liệu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End block content -->
          </main>  
      </div>
  </div>
  <?php include_once(__DIR__ . '/layouts/footer.php');?>
  <?php include_once(__DIR__.'/script.php');?>
  <script src="/templateDoAn/vendor/Chart.js/Chart.min.js"></script>
  <script>
        $(document).ready(function(){
            // ----------------- Tổng số sản phẩm --------------------------
            function getDuLieuTongSoMatHang(){
                $.ajax('/templateDoAn/api/baocao-tongsanpham.php',{
                success: function(data){
                    var dataobj = JSON.parse(data);
                    var htmlstring =  `<h1>${dataobj.SoLuong}</h1>`;
                    $('#baocaoSanPham_SoLuong').html(htmlstring);
                    },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoSanPham_SoLuong').html(htmlString);
                    }
                });
            }
            $('#refreshBaoCaoSanPham').click(function(){
                getDuLieuTongSoMatHang();
            });
       
            // ----------------- Tổng số khách hàng --------------------------
            function getDuLieuBaoCaoTongSoKhachHang() {
                $.ajax('/templateDoAn/api/baocao-tongkhachhang.php', {
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var htmlString = `<h1>${dataObj.SoLuong}</h1>`;
                    $('#baocaoKhachHang_SoLuong').html(htmlString);
                },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoKhachHang_SoLuong').html(htmlString);
                }
                });
            }
            $('#refreshBaoCaoKhachHang').click(function(event) {
                event.preventDefault();
                getDuLieuBaoCaoTongSoKhachHang();
            });
            // ----------------- Tổng số đơn hàng --------------------------
            function getDuLieuBaoCaoTongSoDonHang() {
                $.ajax('/templateDoAn/api/baocao-tongdondathang.php', {
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var htmlString = `<h1>${dataObj.SoLuong}</h1>`;
                    $('#baocaoDonHang_SoLuong').html(htmlString);
                },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoDonHang_SoLuong').html(htmlString);
                }
                });
            }
            $('#refreshBaoCaoDonHang').click(function(event) {
                event.preventDefault();
                getDuLieuBaoCaoTongSoDonHang();
            });
            // ----------------- Tổng số chủ đề --------------------------
            function getDuLieuBaoCaoTongSoChuDeSanPham() {
                $.ajax('/templateDoAn/api/baocao-tongchudesanpham.php', {
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var htmlString = `<h1>${dataObj.SoLuong}</h1>`;
                    $('#baocaoChuDeSanPham_SoLuong').html(htmlString);
                },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoChuDeSanPham_SoLuong').html(htmlString);
                }
                });
            }
            $('#refreshBaoCaoChuDeSanPham').click(function(event) {
                event.preventDefault();
                getDuLieuBaoCaoTongSoChuDeSanPham();
            });
            // ----------------- Tổng số khuyến mãi --------------------------
            function getDuLieuBaoCaoTongSoKhuyenMai() {
                $.ajax('/templateDoAn/api/baocao-tongkhuyenmai.php', {
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var htmlString = `<h1>${dataObj.SoLuong}</h1>`;
                    $('#baocaoKhuyenMai_SoLuong').html(htmlString);
                },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoKhuyenMai_SoLuong').html(htmlString);
                }
                });
            }
            $('#refreshBaoCaoKhuyenMai').click(function(event) {
                event.preventDefault();
                getDuLieuBaoCaoTongSoKhuyenMai();
            });
            // ----------------- Tổng số khuyến mãi --------------------------
            function getDuLieuBaoCaoTongSoBinhLuan() {
                $.ajax('/templateDoAn/api/baocao-tongbinhluan.php', {
                success: function(data) {
                    var dataObj = JSON.parse(data);
                    var htmlString = `<h1>${dataObj.SoLuong}</h1>`;
                    $('#baocaoBinhLuan_SoLuong').html(htmlString);
                },
                error: function() {
                    var htmlString = `<h1>Không thể xử lý</h1>`;
                    $('#baocaoBinhLuan_SoLuong').html(htmlString);
                }
                });
            }
            $('#refreshBaoCaoBinhLuan').click(function(event) {
                event.preventDefault();
                getDuLieuBaoCaoTongSoBinhLuan();
            });
             // ------------------ Vẽ biểu đồ thống kê Loại hoa sản phẩm -----------------
            // Vẽ biểu đổ Thống kê Loại sản phẩm sử dụng ChartJS
            var $objChartThongKeLoaiHoaSanPham;
            var $chartOfobjChartThongKeLoaiHoaSanPham = document.getElementById("chartOfobjChartThongKeLoaiHoaSanPham").getContext(
              '2d');
            function renderChartThongKeLoaiHoaSanPham() {
                $.ajax({
                url: '/templateDoAn/api/baocao-thongkesanpham-loaihoa.php',
                type: "GET",
                success: function(response) {
                    var data = JSON.parse(response);
                    var myLabels = [];
                    var myData = [];
                    $(data).each(function() {
                    myLabels.push((this.TenLoaiHoa));
                    myData.push(this.SoLuong);
                    });
                    myData.push(0); // tạo dòng số liệu 0
                    if (typeof $objChartThongKeLoaiHoaSanPham !== "undefined") {
                        $objChartThongKeLoaiHoaSanPham.destroy();
                    }
                    $objChartThongKeLoaiHoaSanPham = new Chart($chartOfobjChartThongKeLoaiHoaSanPham, {
                    // Kiểu biểu đồ muốn vẽ. Các bạn xem thêm trên trang ChartJS
                    type: "bar",
                    data: {
                        labels: myLabels,
                        datasets: [{
                        data: myData,
                        borderColor: "#9ad0f5",
                        backgroundColor: "#9ad0f5",
                        borderWidth: 1
                        }]
                    },
                    // Cấu hình dành cho biểu đồ của ChartJS
                    options: {
                        legend: {
                        display: false
                        },
                        title: {
                        display: true,
                        text: "Thống kê loại hoa sản phẩm"
                        },
                        responsive: true
                    }
                    });
                }
                });
            };
            $('#refreshThongKeLoaiHoaSanPham').click(function(event) {
                event.preventDefault();
                renderChartThongKeLoaiHoaSanPham();
            });
            // ------------------ Vẽ biểu đồ thống kê Chủ đề sản phẩm -----------------
            // Vẽ biểu đổ Thống kê Loại sản phẩm sử dụng ChartJS
            var $objChartThongKeChuDeSanPham;
            var $chartOfobjChartThongKeChuDeSanPham = document.getElementById("chartOfobjChartThongKeChuDeSanPham").getContext(
              '2d');
            function renderChartThongKeChuDeSanPham() {
                $.ajax({
                url: '/templateDoAn/api/baocao-thongkesanpham-chude.php',
                type: "GET",
                success: function(response) {
                    var data = JSON.parse(response);
                    var myLabels = [];
                    var myData = [];
                    $(data).each(function() {
                    myLabels.push((this.TenChuDe));
                    myData.push(this.SoLuong);
                    });
                    myData.push(0); // tạo dòng số liệu 0
                    if (typeof $objChartThongKeChuDeSanPham !== "undefined") {
                        $objChartThongKeChuDeSanPham.destroy();
                    }
                    $objChartThongKeChuDeSanPham = new Chart($chartOfobjChartThongKeChuDeSanPham, {
                    // Kiểu biểu đồ muốn vẽ. Các bạn xem thêm trên trang ChartJS
                    type: "pie",
                    data: {
                        labels: myLabels,
                        datasets: [{
                        data: myData,
                        borderColor: "#9ad0f5",
                        backgroundColor: "#9ad0f5",
                        borderWidth: 1
                        }]
                    },
                    // Cấu hình dành cho biểu đồ của ChartJS
                    options: {
                        legend: {
                        display: false
                        },
                        title: {
                        display: true,
                        text: "Thống kê chủ đề sản phẩm"
                        },
                        responsive: true
                    }
                    });
                }
                });
            };
            $('#refreshThongKeChuDeSanPham').click(function(event) {
                event.preventDefault();
                renderChartThongKeChuDeSanPham();
            });
            getDuLieuTongSoMatHang();
            getDuLieuBaoCaoTongSoKhachHang();
            getDuLieuBaoCaoTongSoDonHang();
            getDuLieuBaoCaoTongSoChuDeSanPham();
            getDuLieuBaoCaoTongSoKhuyenMai();
            getDuLieuBaoCaoTongSoBinhLuan();
            renderChartThongKeChuDeSanPham();
            renderChartThongKeLoaiHoaSanPham();
        });  
    </script>
</body>
</html>