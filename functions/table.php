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
                    <div class="text-center m-5">
                        <button id="btn" class="btn btn-danger">nguy hiem</button>
                    </div>
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
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Ten</th>
                                <th>Gia</th>
                                <th>SL</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#tbl tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input class="form-control" type="text" placeholder="Tim theo ' + title + '" />');
            });
            var table = $('#tbl').DataTable({
                dom: "<'row'<'col-md-12 text-center'B>><'row'<'col-md-6'l><'col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-md-6'i><'col-md-6'p>>",
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                initComplete: function() {
                    // Apply the search
                    this.api().columns().every(function() {
                        var that = this;
                        $('input', this.footer()).on('keyup change clear', function() {
                            if (that.search() !== this.value) {
                                that
                                    .search(this.value)
                                    .draw();
                            }
                        });
                    });
                },
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
            $('#btn').click(function() {
                Swal.fire({
                    imageUrl: '/templatedoan/imgs/logo.png',
                    imageHeight: 50,
                    imageWidth: 50,
                    imageAlt: 'A tall image',
                    title: "Ten trang web",
                    text: "noi dung dai thiet la dai nhu vay ne phai thiet la dai thi moi duoc",
                    // icon: 'success',
                    showCancelButton: true,
                    confirmButtonText: `Chuyen huong`,
                    cancelButtonText: `Huy bo`,
                    background: '#ddd',
                    backdrop: `
                                    rgba(0,0,123,0.4)
                                    url("/templatedoan/imgs/bottom.png")
                                    bottom
                                    repeat-x
                                `
                }).then((result) => {
                    if (result.isConfirmed) {
                        let timerInterval
                        Swal.fire({
                            title: 'Dang chuyen huong!',
                            html: 'trang web sẽ tự chuyển hướng sau <b></b> milliseconds.',
                            timer: 2000,
                            timerProgressBar: true,
                            background: 'url(/templatedoan/imgs/bgalert.jpg)',
                            backdrop: `
                                        rgba(0,0,123,0.4)
                                        url("/templatedoan/imgs/background.png")
                                        left top
                                        repeat-x
                                    `,
                            willOpen: () => {
                                Swal.showLoading()
                                timerInterval = setInterval(() => {
                                    const content = Swal.getContent()
                                    if (content) {
                                        const b = content.querySelector('b')
                                        if (b) {
                                            b.textContent = Swal.getTimerLeft()
                                        }
                                    }
                                }, 100)
                            },
                            onClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                Swal.fire("đã chuyển hướng")
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire('DA HUY BO', '', 'info')
                    }
                });
            })

        });
    </script>
</body>

</html>