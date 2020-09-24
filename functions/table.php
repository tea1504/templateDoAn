<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../template-dashbroad/style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/DataTables/datatables.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">
    <title>Template Table</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <?php include_once(__DIR__ . '/../layout/header.php'); ?>
            </div>
        </div>
    </div>
    <div id="body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 p-0 ">
                    <?php include_once(__DIR__ . '/../layout/sidebar.php'); ?>
                </div>
                <div class="col-md-10 pt-5 pl-5 text-white" id="content">
                    <table class="table text-center text-white" id="tbl">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ten</th>
                                <th scope="col">gia</th>
                                <th scope="col">sl</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Hang A</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hang B</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hang C</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Hang D</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Hang E</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Hang A</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Hang B</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Hang C</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Hang D</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Hang E</td>
                                <td>10000</td>
                                <td>12</td>
                                <td>ok</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0">
                <?php include_once(__DIR__ . '/../layout/footer.php'); ?>
            </div>
        </div>
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/datatables.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/Buttons-1.6.3/js/buttons.bootstrap4.min.js"></script>
    <script src="/templateDoAn/vendor/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="/templateDoAno/vendor/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#tbl').DataTable({
                dom: "<'row'<'col-md-12 text-center'B>><'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-md-6'i><'col-md-6'p>>",
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                language: {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Xem _MENU_ mục",
                    "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
                    "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                    "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Đầu",
                        "sPrevious": "Trước",
                        "sNext": "Tiếp",
                        "sLast": "Cuối"
                    },
                    buttons: {
                        "copy": "Sao chép",
                        "excel": "Xuất ra file Excel",
                        "pdf": "Xuất ra file PDF",
                    }
                },
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 50, 100, -1],
                    [5, 10, 15, 20, 25, 50, 100, "Tat ca"]
                ]
            });
        });
    </script>
</body>

</html>