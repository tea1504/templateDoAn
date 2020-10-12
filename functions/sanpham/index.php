<?php
if (session_id() === '') {
  session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoaxin.vn</title>

    <!-- Nhúng file Quản lý các Liên kết CSS dùng chung cho toàn bộ trang web -->
    <?php
        include_once(__DIR__ . '/../../template-index/style.php');
    ?>
    <!-- DataTable CSS -->
    <link rel="stylesheet" href="../template-dashbroad/style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/DataTables/datatables.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">
</head>

<body class="d-flex flex-column h-100">
    <!-- header -->
    <?php include_once(__DIR__ . '/../../template-dashbroad/layouts/header.php');?> 

    <!-- end header -->

    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
                <?php include_once(__DIR__ . '/../../template-dashbroad/layouts/sidebar.php'); ?>
            <!-- end sidebar -->

            <main role="main" class="col-md-10 ml-sm-auto px-4 mb-2">
                <div class="text-justify pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="text-justify">Danh sách sản phẩm</h1>
                </div>

                <!-- Block content -->
                

                <!-- Nút thêm mới, bấm vào sẽ hiển thị form nhập thông tin Thêm mới -->
                <a href="create.php" class="btn btn-primary ">
                    Thêm mới sản phẩm
                </a>
                <table id="tblDanhSach" class="table table-striped table-hover  table-responsive ">
                    <thead class="thead-dark">
                        <tr>
                            <th>Mã hoa</th>
                            <th>Tên hoa</th>
                            <th>Loại hoa</th>
                            <th>Giá hoa</th>
                            <th>Nhà sản xuất</th>
                            <th>Khuyến mãi</th>
                            <th>Ngày cập nhật</th>
                            <th>Thực thi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mã 001</td>
                            <td>Hoa hồng trắng </td>
                            <td>Hoa hồng</td>
                            <td>30.000</td>
                            <td>Vườn hoa Đà Lạt</td>
                            <td>1</td>
                            <td>29-10-2020</td>
                            <td>
                                <a href="#" class="btn btn-warning">
                                     Sửa
                                </a>
                                <a href="#" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mã 001</td>
                            <td>Hoa hồng trắng </td>
                            <td>Hoa hồng</td>
                            <td>50.000</td>
                            <td>Vườn hoa Đà Lạt</td>
                            <td>1</td>
                            <td>29-10-2020</td>
                            <td>
                                <a href="#" class="btn btn-warning">
                                     Sửa
                                </a>
                                <a href="#" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- End block content -->
            </main>
        </div>
    </div>
    <!--     Phần content         -->
    
    <!-- footer -->
    <?php include_once(__DIR__ . '/../../template-dashbroad/layouts/footer.php');?> 
    <!-- end footer -->

    <!-- Nhúng file quản lý phần SCRIPT JAVASCRIPT -->
    <?php
        include_once(__DIR__ . '/../../template-index/script.php');
    ?> 
    <!-- Các file Javascript sử dụng riêng cho trang này, liên kết tại đây -->
    <!-- DataTable JS -->
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/datatables.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/Buttons-1.6.3/js/buttons.bootstrap4.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            // Yêu cầu DataTable quản lý datatable #tblDanhSach
            $('#tblDanhSach').DataTable({
                dom: 'Bft',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });

            // Cảnh báo khi xóa
            // 1. Đăng ký sự kiện click cho các phần tử (element) đang áp dụng class .btnDelete
            $('.btnDelete').click(function() {
                // Click hanlder
                // 2. Sử dụng thư viện SweetAlert để hiện cảnh báo khi bấm nút xóa
                swal({
                        title: "Bạn có chắc chắn muốn xóa?",
                        text: "Một khi đã xóa, không thể phục hồi....",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) { // Nếu đồng ý xóa

                            // 3. Lấy giá trị của thuộc tính (custom attribute HTML) 'dh_ma'
                            // var dh_ma = $(this).attr('data-dh_ma');
                            var dh_ma = $(this).data('dh_ma');
                            var url = "delete.php?dh_ma=" + dh_ma;

                            // Điều hướng qua trang xóa với REQUEST GET, có tham số dh_ma=...
                            location.href = url;
                        } else { // Nếu không đồng ý xóa
                            swal("Cẩn thận hơn nhé!");
                        }
                    });

            });
        });
    </script>

</body>

</html>