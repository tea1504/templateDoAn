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
                        $sqlKhuyenMai = <<<EOT
                        SELECT *
                        FROM khuyenmai
                        WHERE km_denngay >= NOW();
EOT;
                        $resultKhuyenMai = mysqli_query($conn, $sqlKhuyenMai);
                        $dataKhuyenMai = [];
                        $i=1;
                        while($row = mysqli_fetch_array($resultKhuyenMai, MYSQLI_ASSOC)){
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
                        <?php foreach ($dataKhuyenMai as $km):?>
                        <li data-target="#carouselExampleCaptions" data-slide-to="<?=$km['km_index']?>"></li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/templatedoan/anh-do-an/km3.jpg" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h1 class="text-shadow">Chào mừng đến với SHOPHOA</h1>
                            </div>
                        </div>
                        <?php foreach ($dataKhuyenMai as $km):?>
                            <div class="carousel-item">
                            <img src="/templatedoan/anh-do-an/<?=$km['km_anh']?>" class="d-block w-100" alt="<?=$km['km_ten']?>">
                            <div class="carousel-caption d-none d-md-block">
                                <a class="text-white" href="sukien.php?km_id=<?=$km['km_id']?>"><h1 class="text-shadow"><?=$km['km_ten']?></h1></a>
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
        $sqlDanhSachSanPham = <<<EOT
        SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile, AVG(bl.bl_sao) AS sao
        FROM sanpham AS sp
        LEFT JOIN hinhsanpham AS hsp ON sp.sp_id = hsp.sanpham_sp_id
        LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id
        GROUP BY sp.sp_id
        LIMIT 0, 4;
EOT;
        $resultDanhSachSanPham = mysqli_query($conn, $sqlDanhSachSanPham);
        $dataDanhSachSanPham = [];
        while ($row = mysqli_fetch_array($resultDanhSachSanPham, MYSQLI_ASSOC)) {
            $dataDanhSachSanPham[] = array(
                'sp_id' => $row['sp_id'],
                'sp_ten' => $row['sp_ten'],
                'sp_gia' => number_format($row['sp_gia'], 0, ".", ","),
                'sp_giacu' => number_format($row['sp_giacu'], 0, ".", ","),
                'sp_avt_tenfile' => $row['sp_avt_tenfile'],
                'hsp_tenfile' => $row['hsp_tenfile'],
                'sao' => $row['sao']>0?$row['sao']:0,
            );
        }
        ?>
        <h3 class="myfont text-danger mt-3 text-center">Sản phẩm</h3>
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
                                    <?php for($i=1;$i<=floor($sp['sao']);$i++): ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=ceil($sp['sao']) - floor($sp['sao']);$i++): ?>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=5 - ceil($sp['sao']);$i++): ?>
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
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
        $sqlDanhSachSanPhamMoi = <<<EOT
        SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile,AVG(bl.bl_sao) AS sao
        FROM sanpham AS sp
        LEFT JOIN hinhsanpham AS hsp ON sp.sp_id = hsp.sanpham_sp_id
        LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id
        GROUP BY sp.sp_id
        ORDER BY sp.sp_ngaycapnhat DESC
        LIMIT 0, 4;
EOT;
        $resultDanhSachSanPhamMoi = mysqli_query($conn, $sqlDanhSachSanPhamMoi);
        $dataDanhSachSanPhamMoi = [];
        while ($row = mysqli_fetch_array($resultDanhSachSanPhamMoi, MYSQLI_ASSOC)) {
            $dataDanhSachSanPhamMoi[] = array(
                'sp_id' => $row['sp_id'],
                'sp_ten' => $row['sp_ten'],
                'sp_gia' => number_format($row['sp_gia'], 0, ".", ","),
                'sp_giacu' => number_format($row['sp_giacu'], 0, ".", ","),
                'sp_avt_tenfile' => $row['sp_avt_tenfile'],
                'hsp_tenfile' => $row['hsp_tenfile'],
                'sao' => $row['sao']>0?$row['sao']:0,
            );
        }
        ?>
        <h3 class="myfont text-danger mt-3 text-center">Sản phẩm mới</h3>
        <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-1">
        <?php foreach ($dataDanhSachSanPhamMoi as $sp) : ?>
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
                                    <?php for($i=1;$i<=floor($sp['sao']);$i++): ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=ceil($sp['sao']) - floor($sp['sao']);$i++): ?>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=5 - ceil($sp['sao']);$i++): ?>
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
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
        $sqlDanhSachSanPhamMoi = <<<EOT
        SELECT sp.sp_id, sp.sp_ten, sp.sp_gia, sp.sp_giacu, sp.sp_avt_tenfile, hsp.hsp_tenfile AS hsp_tenfile,AVG(bl.bl_sao) AS sao
        FROM sanpham AS sp
        LEFT JOIN hinhsanpham AS hsp ON sp.sp_id = hsp.sanpham_sp_id
        LEFT JOIN binhluan AS bl ON sp.sp_id = bl.sanpham_sp_id
        GROUP BY sp.sp_id
        ORDER BY sp.sp_yeuthich DESC
        LIMIT 0, 4;
EOT;
        $resultDanhSachSanPhamMoi = mysqli_query($conn, $sqlDanhSachSanPhamMoi);
        $dataDanhSachSanPhamMoi = [];
        while ($row = mysqli_fetch_array($resultDanhSachSanPhamMoi, MYSQLI_ASSOC)) {
            $dataDanhSachSanPhamMoi[] = array(
                'sp_id' => $row['sp_id'],
                'sp_ten' => $row['sp_ten'],
                'sp_gia' => number_format($row['sp_gia'], 0, ".", ","),
                'sp_giacu' => number_format($row['sp_giacu'], 0, ".", ","),
                'sp_avt_tenfile' => $row['sp_avt_tenfile'],
                'hsp_tenfile' => $row['hsp_tenfile'],
                'sao' => $row['sao']>0?$row['sao']:0,
            );
        }
        ?>
        <h3 class="myfont text-danger mt-3 text-center">Sản phẩm yêu thích</h3>
        <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-1">
        <?php foreach ($dataDanhSachSanPhamMoi as $sp) : ?>
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
                                    <?php for($i=1;$i<=floor($sp['sao']);$i++): ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=ceil($sp['sao']) - floor($sp['sao']);$i++): ?>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    <?php for($i=1;$i<=5 - ceil($sp['sao']);$i++): ?>
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
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="themsp" style="display: none">
        <div class="shadow-lg p-3" id="a">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="close" aria-label="Close" id="btn-themsp">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="img-fluid my-1 img-thumbnail">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="myfont">Bó hoa Crystal Pearl</h3>
                <p>
                    <small class="text-secondary">Nhãn hiệu : chưa biết</small> <br>
                    <small class="text-secondary">Mã sản phẩm : SP005</small> <br>
                    <small class="text-secondary">Trạng thái : Hết hàng</small> <br>
                </p>
                <h4><span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span></h4>
                <hr>
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
                        <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                    </div>
                    <h5 class="text-danger">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </h5>
                    <div class="form-group">
                        <b>0 đánh giá</b>
                    </div>
                </form>
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
        $(document).ready(function () {
            $('.btn-add').click(function (e) { 
                e.preventDefault();
                $('#themsp').show(500);
            });
            $('#themsp .close').click(function (e) { 
                e.preventDefault();
                $('#themsp').hide(500);
            });
        });
    </script>
</body>

</html>