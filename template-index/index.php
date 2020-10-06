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
    include_once(__DIR__ . '/../layout/navbar.php');
    ?>
    <!-- Drop Phần header     -->
    <!--     Phần content         -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-2-1970x717.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-shadow">First slide label</h5>
                                <p class="text-shadow">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-1-1970x717.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-shadow">Second slide label</h5>
                                <p class="text-shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://livedemo00-opencart.template-help.com/opencart_prod-21807/image/cache/catalog/slider/slide-3-1970x717.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-shadow">Third slide label</h5>
                                <p class="text-shadow">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
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
    <!--Drop Phần content         -->
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