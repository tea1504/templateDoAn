<?php
if (session_id() === '') {
    session_start();
}

include_once(__DIR__ . '/dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include_once(__DIR__ . '/../template-index/style.php');
    ?>
</head>

<body>
    <!--      Phần header     -->
    <?php
    include_once(__DIR__ . '/navbar.php');
    ?>
    <!-- Drop Phần header     -->
    <!--     Phần content         -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <?php
                    $sqlKhuyenMai = "SELECT * FROM khuyenmai WHERE km_denngay >= NOW();";
                    $resultKhuyenMai = mysqli_query($conn, $sqlKhuyenMai);
                    $dataKhuyenMai = [];
                    $i = 1;
                    while ($row = mysqli_fetch_array($resultKhuyenMai, MYSQLI_ASSOC)) {
                        $dataKhuyenMai[] = array(
                            'km_index' => $i++,
                            'km_id' => $row['km_id'],
                            'km_ten' => $row['km_ten'],
                            'km_noidung' => $row['km_noidung'],
                            'km_tungay' => $row['km_tungay'],
                            'km_denngay' => $row['km_denngay'],
                            'km_anh' => $row['km_anh'],
                        );
                    }
                    ?>
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <?php foreach ($dataKhuyenMai as $km) : ?>
                            <li data-target="#carouselExampleCaptions" data-slide-to="<?= $km['km_index'] ?>"></li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/templatedoan/anh-do-an/km3.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-shadow">Chào mừng đến với SHOPHOA</h1>
                            </div>
                        </div>
                        <?php foreach ($dataKhuyenMai as $km) : ?>
                            <div class="carousel-item">
                                <img src="/templatedoan/anh-do-an/<?= $km['km_anh'] ?>" class="d-block w-100" alt="<?= $km['km_ten'] ?>">
                                <div class="carousel-caption d-none d-md-block">
                                    <a class="text-white" href="sukien.php?km_id=<?= $km['km_id'] ?>">
                                        <h1 class="text-shadow"><?= $km['km_ten'] ?></h1>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sản phẩm -->
    <div class="container">
        <?php
        $type = $_GET['type'];
        $id = $_GET['id'];
        if (isset($_GET['page']))
            $page = $_GET['page'];
        else
            $page = 1;
        $offset = ($page - 1) * 8;
        if ($type == 'mauhoa') {
            $sqlCount = "SELECT COUNT(*) as c FROM sanpham_has_mauhoa WHERE mauhoa_mh_id ={$id}";
            $sql = "SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile, AVG(bl.bl_sao) AS sao FROM sanpham AS sp LEFT JOIN hinhsanpham AS hsp ON hsp.sanpham_sp_id = sp.sp_id LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id JOIN sanpham_has_mauhoa AS spmh ON sp.sp_id = spmh.sanpham_sp_id AND spmh.mauhoa_mh_id = {$id} GROUP BY sp.sp_id LIMIT {$offset}, 8;";
            $sqlType = "SELECT mh_ten as ten FROM mauhoa WHERE mh_id={$id};";
        } else if ($type == 'loaihoa') {
            $sqlCount = "SELECT COUNT(*) as c FROM sanpham_has_loaihoa WHERE loaihoa_lh_id ={$id}";
            $sql = "SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile, AVG(bl.bl_sao) AS sao FROM sanpham AS sp LEFT JOIN hinhsanpham AS hsp ON hsp.sanpham_sp_id = sp.sp_id LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id JOIN sanpham_has_loaihoa AS splh ON sp.sp_id = splh.sanpham_sp_id AND splh.loaihoa_lh_id = {$id} GROUP BY sp.sp_id LIMIT {$offset}, 8;";
            $sqlType = "SELECT lh_ten as ten FROM loaihoa WHERE lh_id={$id};";
        } else {
            $sqlCount = "SELECT COUNT(*) as c FROM sanpham_has_chude WHERE chude_cd_id ={$id}";
            $sql = "SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile, AVG(bl.bl_sao) AS sao FROM sanpham AS sp LEFT JOIN hinhsanpham AS hsp ON hsp.sanpham_sp_id = sp.sp_id LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id JOIN sanpham_has_chude AS spcd ON sp.sp_id = spcd.sanpham_sp_id AND spcd.chude_cd_id = {$id} GROUP BY sp.sp_id LIMIT {$offset}, 8;";
            $sqlType = "SELECT cd_ten as ten FROM chude WHERE cd_id={$id};";
        }
        $resultDanhSachSanPham = mysqli_query($conn, $sql);
        $dataDanhSachSanPham = [];
        while ($row = mysqli_fetch_array($resultDanhSachSanPham, MYSQLI_ASSOC)) {
            $dataDanhSachSanPham[] = array(
                'sp_id' => $row['sp_id'],
                'sp_ten' => $row['sp_ten'],
                'sp_gia' => number_format($row['sp_gia'], 0, ".", ","),
                'sp_giacu' => number_format($row['sp_giacu'], 0, ".", ","),
                'sp_avt_tenfile' => $row['sp_avt_tenfile'],
                'hsp_tenfile' => $row['hsp_tenfile'],
                'sao' => $row['sao'] > 0 ? $row['sao'] : 0,
            );
        }
        $resultType = mysqli_query($conn, $sqlType);
        $dataType = '';
        while ($row = mysqli_fetch_array($resultType, MYSQLI_ASSOC)) {
            $dataType = $row['ten'];
        }
        $resultCount = mysqli_query($conn, $sqlCount);
        $dataCount = 0;
        while ($row = mysqli_fetch_array($resultCount, MYSQLI_ASSOC)) {
            $dataCount = $row['c'];
        }
        ?>
        <a name="123"></a>
        <h3 class="myfont text-danger mt-3 text-center"><?= $dataType ?></h3>
        <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-1">
            <?php foreach ($dataDanhSachSanPham as $sp) : ?>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php?sp_id=<?= $sp['sp_id'] ?>">
                            <div class="my-box-card-img">
                                <!-- Ảnh đại diện -->
                                <?php if (!file_exists('../anh-do-an/' . $sp['sp_avt_tenfile'])) : ?>
                                    <img src="/templatedoan/anh-do-an/default.png" alt="<?= $sp['sp_ten'] ?>" class="card-img-top my-card-img img-show">
                                <?php else : ?>
                                    <img src="/templatedoan/anh-do-an/<?= $sp['sp_avt_tenfile'] ?>" alt="<?= $sp['sp_ten'] ?>" class="card-img-top my-card-img img-show">
                                <?php endif; ?>
                                <!-- Ảnh thứ 2 -->
                                <?php if (!file_exists('../anh-do-an/' . $sp['hsp_tenfile']) || empty($sp['hsp_tenfile'])) : ?>
                                    <img src="/templatedoan/anh-do-an/default.png" alt="<?= $sp['sp_ten'] ?>" class="card-img-top my-card-img img-hide">
                                <?php else : ?>
                                    <img src="/templatedoan/anh-do-an/<?= $sp['hsp_tenfile'] ?>" alt="<?= $sp['sp_ten'] ?>" class="card-img-top my-card-img img-hide">
                                <?php endif; ?>
                                <div class="text-danger danh_gia">
                                    <?php for ($i = 1; $i <= floor($sp['sao']); $i++) : ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for ($i = 1; $i <= ceil($sp['sao']) - floor($sp['sao']); $i++) : ?>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for ($i = 1; $i <= 5 - ceil($sp['sao']); $i++) : ?>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php?sp_id=<?= $sp['sp_id'] ?>" class="card-title my-card-title font-weight-bold">
                                <?= $sp['sp_ten'] ?>
                            </a>
                            <h5 class="my-3">
                                <?php if ($sp['sp_giacu'] != "0") : ?>
                                    <span class="text-secondary"><s><?= $sp['sp_giacu'] ?></s>
                                    <?php endif; ?>
                                    </span> <span class="text-danger"><?= $sp['sp_gia'] ?> đ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add btn-mua" data-sp_id="<?= $sp['sp_id'] ?>">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Phân trang  -->
        <nav aria-label="Page navigation example" class="mx-auto">
            <ul class="pagination justify-content-center">
                <?php if ($page <= 1) : ?>
                    <li class="page-item disabled"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page - 1 ?>#123">Previous</a></li>
                <?php else : ?>
                    <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page - 1 ?>#123">Previous</a></li>
                <?php endif; ?>
                <?php
                $num_page = ceil($dataCount / 8);
                if ($num_page <= 4) {
                    for ($i = 1; $i <= $num_page; $i++) {
                        if ($i == $page) {
                        ?>
                                <li class="page-item active"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?><span class="sr-only">(current)</span></a></li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?></a></li>
                        <?php
                            }
                    }
                } else {
                    if ($page < 3) {
                        $n = 3 > $num_page ? $num_page : 3;
                        for ($i = 1; $i <= $n; $i++) {
                            if ($i == $page) {
                        ?>
                                <li class="page-item active"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?><span class="sr-only">(current)</span></a></li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?></a></li>
                        <?php
                            }
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page + 3 ?>#123">...</a></li>
                    <?php
                    } else if ($num_page - $page + 1 <= 2) {
                    ?>
                        <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $num_page - 3 ?>#123">...</a></li>
                        <?php
                        $start = $num_page - 2 > 0 ? $num_page - 2: 1;
                        for ($i = $start; $i <= $num_page; $i++) {
                            if ($i == $page) {
                        ?>
                                <li class="page-item active"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?><span class="sr-only">(current)</span></a></li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?></a></li>
                        <?php
                            }
                        }
                    } else {
                        ?>
                        <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page - 2 ?>#123">...</a></li>
                        <?php
                        $n = $page + 1 > $num_page ? $num_page : $page + 1;
                        for ($i = $page - 1; $i <= $n; $i++) {
                            if ($i == $page) {
                        ?>
                                <li class="page-item active"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?><span class="sr-only">(current)</span></a></li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $i ?>#123"><?= $i ?></a></li>
                        <?php
                            }
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page + 2 ?>#123">...</a></li>
                <?php
                    }
                }
                ?>
                <?php if ($page >= $num_page) : ?>
                    <li class="page-item disabled"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page + 1 ?>#123">Next</a></li>
                <?php else : ?>
                    <li class="page-item"><a class="page-link" href="phanloai.php?type=<?= $type ?>&id=<?= $id ?>&page=<?= $page + 1 ?>#123">Next</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- End phân trang  -->
    </div>
    <div id="themsp" style="display: none">
        <div class="shadow-lg p-3" id="a">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="close" aria-label="Close" id="btn-themsp">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="col-md-12" id="content">
                </div>
            </div>
        </div>
    </div>
    <!--Drop Phần content         -->
    <!--      Phần footer     -->
    <?php
    include_once(__DIR__ . '/../layout/footer.php');
    ?>
    <!-- Drop Phần footer     -->
    <!-- Liên kết js -->
    <?php
    include_once(__DIR__ . '/../template-index/script.php');
    ?>
    <!-- Liên kết js -->
    <script>
        $(document).ready(function() {
            $('.btn-mua').click(function(e) {
                e.preventDefault();
                $('#themsp').show();
            });
            $('#themsp .close').click(function(e) {
                e.preventDefault();
                $('#themsp').hide();
                console.log(1);
            });

            function render(dulieu) {
                $.ajax({
                    url: '/templatedoan/test-Database/laysanpham.php',
                    method: 'POST',
                    data: dulieu,
                    success: function(response) {
                        var data = JSON.parse(response);
                        var gia = '';
                        if (data.sp_giacu != '0') {
                            gia = `
                            <h4><span class="text-secondary"><s>${data.sp_giacu}</s></span> <span class="text-danger">${data.sp_gia} đ</span></h4>
                            `
                        } else {
                            gia = `
                            <h4><span class="text-danger">${data.sp_gia} đ</span></h4>
                            `
                        }
                        var sao = '';
                        for (var i = 1; i <= data.sao; i++)
                            sao += '<i class="fa fa-star" aria-hidden="true"></i>';
                        for (var i = 1; i <= Math.ceil(data.sao) - Math.floor(data.sao); i++)
                            sao += '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                        for (var i = 1; i <= 5 - Math.ceil(data.sao); i++)
                            sao += '<i class="fa fa-star-o" aria-hidden="true"></i>';
                        var htmlString = `
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <img src="/templatedoan/anh-do-an/${data.sp_avt_tenfile}" alt="" class="img-fluid my-1 img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="myfont">${data.sp_ten}</h3>
                                        <p>
                                            <small class="text-secondary">Nhãn hiệu : chưa biết</small> <br>
                                            <small class="text-secondary">Mã sản phẩm : SP005</small> <br>
                                            <small class="text-secondary">Trạng thái : Hết hàng</small> <br>
                                        </p>
                                        ${gia}
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                    <p>${data.sp_mota_ngan}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="myfont">Tùy chọn</h3>
                                <form action="" method="post" name="frm_muahang" id="frm_muahang">
                                    <input type="hidden" name="ma" id="ma" value="ma">
                                    <div class="form-group">
                                        <label for="num" class="col-form-label">Số lượng : </label>
                                        <input type="number" name="num" id="num" min=0 class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn myfont text-danger btn-add" id="btn-them">Thêm vào giỏ hàng</button>
                                    </div>
                                    <h5 class="text-danger">
                                        ${sao}
                                    </h5>
                                    <div class="form-group">
                                        <b>${data.sobl} đánh giá</b>
                                    </div>
                                </form>
                            </div>
                        </div>`
                        $('#content').html(htmlString);
                    },
                    error: function() {

                    }
                });
            }
            $('.btn-mua').click(function(e) {
                e.preventDefault();
                render({
                    sp_id: $(this).data('sp_id')
                });
            });
        });
    </script>
</body>

</html>