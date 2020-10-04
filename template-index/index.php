<?php
if (session_id() === '') {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include_once(__DIR__ . '/style.php');
    ?>
</head>

<body>
    <!--      Phần header     -->
    <?php
    include_once(__DIR__ . '/../layout/header.php');
    ?>
    <!-- Drop Phần header     -->



    <!--     Phần content         -->

    <!--Drop Phần content         -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="CSSgal">
                    <!-- Don't wrap targets in parent -->
                    <s id="s1"></s>
                    <s id="s2"></s>
                    <s id="s3"></s>
                    <div class="slider">
                        <div>
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-3-1970x717.jpg">
                        </div>
                        <div class="img_silder">
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-1-1970x717.jpg">
                        </div>
                        <div style="background:#e95;">
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-2-1970x717.jpg">
                        </div>
                    </div>

                    <!--   <div class="prevNext">
                        <div><a href="#s4"></a><a href="#s2"></a></div>
                        <div><a href="#s1"></a><a href="#s3"></a></div>
                        <div><a href="#s2"></a><a href="#s4"></a></div>
                        <div><a href="#s3"></a><a href="#s1"></a></div>
                    </div> -->

                    <div class="bullets">
                        <a href="#s1">1</a>
                        <a href="#s2">2</a>
                        <a href="#s3">3</a>
                        <a href="#s4">4</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sản phẩm -->
        <div class="container">
            <h3 class="myfont text-danger mt-3 text-center">Bán chạy</h3>
            <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-1">
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="myfont text-danger mt-3 text-center">Sự kiện</h3>
            <div class="row row-cols-lg-4 row-cols-sm-3 row-cols-1">
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="card my-card">
                        <a href="chitiet.php">
                            <div class="my-box-card-img">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearlonweb_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-show">
                                <img src="/templatedoan/imgs/BoHoaCrystalPearl_d764aec2-22bb-4758-a90f-a5ade95d798c_1024x1024@2x.jpg" alt="" class="card-img-top my-card-img img-hide">
                                <div class="text-danger danh_gia">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </a>
                        <div class="card-body px-0">
                            <a href="chitiet.php" class="card-title my-card-title font-weight-bold">
                                Bó hoa Crystal Pearl
                            </a>
                            <h5 class="my-3">
                                <span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span>
                            </h5>
                            <button class="btn myfont text-danger btn-add">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--      Phần footer     -->
        <?php
        include_once(__DIR__ . '/../layout/footer.php');
        ?>
        <!-- Drop Phần footer     -->



        <!-- Liên kết js -->
        <?php
        include_once(__DIR__ . '/script.php');
        ?>
        <!-- Liên kết js -->

</body>

</html>