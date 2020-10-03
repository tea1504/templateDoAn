<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Test  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <style>
        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #d12c4f;
            background-color: white;
        }
        a.tab{
            background: #f0f0f0;
            color: black;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-2">
                <div class="row row-cols-1" id="anh_nho">
                    <a data-fancybox="gallery" href="/templatedoan/imgs/Solar-Sunflower1-800x857.png" data-caption="Caption for single image" class="col">
                        <img src="/templatedoan/imgs/Solar-Sunflower1-144x154.png" alt="" class="img-fluid img-background my-1">
                    </a>
                    <a data-fancybox="gallery" href="/templatedoan/imgs/Solar-Sunflower1-800x857.png" data-caption="Caption for single image" class="col">
                        <img src="/templatedoan/imgs/Solar-Sunflower2-144x154.png" alt="" class="img-fluid img-background my-1">
                    </a>
                    <a data-fancybox="gallery" href="/templatedoan/imgs/Solar-Sunflower1-800x857.png" data-caption="Caption for single image" class="col">
                        <img src="/templatedoan/imgs/Solar-Sunflower3-144x154.png" alt="" class="img-fluid img-background my-1">
                    </a>
                </div>
            </div>
            <div class="col-md-5" id="anh_dai_dien">
                <a data-fancybox="gallery" href="/templatedoan/imgs/Solar-Sunflower1-800x857.png" data-caption="Hoa hướng dương">
                    <img src="/templatedoan/imgs/Solar-Sunflower1-800x857.png" alt="" class="img-fluid img-background my-1">
                </a>
            </div>
            <div class="col-md-5">
                <h3 class="myfont">Hoa hướng dương</h3>
                <p>
                    <small class="text-secondary">Nhãn hiệu : chưa biết</small> <br>
                    <small class="text-secondary">Mã sản phẩm : SP005</small> <br>
                    <small class="text-secondary">Trạng thái : Hết hàng</small> <br>
                </p>
                <h4><span class="text-secondary"><s>150,000 VNĐ</s></span> <span class="text-danger">130,000 VNĐ</span></h4>
                <hr>
                <h3 class="myfont">Tùy chọn</h3>
                <form action="" method="post" name="frm_muahang" id="frm_muahang">
                    <input type="hidden" name="ma" id="ma" value="ma">
                    <div class="form-group row">
                        <label for="num" class="col-form-label col-md-4">Số lượng : </label>
                        <input type="number" name="num" id="num" min=0 class="col-md-8 form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn myfont text-danger" id="btn-add">Thêm vào giỏ hàng</button>
                    </div>
                    <h5 class="text-danger">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </h5>
                    <div class="form-group">
                        <b>0 đánh giá</b> <br>
                        <b>Viết đánh giá</b>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active tab" id="mo_ta-tab" data-toggle="pill" href="#mo_ta" role="tab" aria-controls="mo_ta" aria-selected="true">Mô tả sản phẩm</a>
                            <a class="nav-link tab" id="chi_tiet-tab" data-toggle="pill" href="#chi_tiet" role="tab" aria-controls="chi_tiet" aria-selected="false">Chi tiết</a>
                            <a class="nav-link tab" id="nhan_xet-tab" data-toggle="pill" href="#nhan_xet" role="tab" aria-controls="nhan_xet" aria-selected="false">Nhập xét</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="mo_ta" role="tabpanel" aria-labelledby="mo_ta-tab">
                                Flowers have two unique peculiarities because they have very unbelievable appearance and unique smell. This combination makes them perfect. And this magical process of fertilization, it is a real wonder. Just imagine how simple and incredible it is when the bees pollinate flowers. Yeah, our nature is unbelievable. If you want to express your feelings without saying a word just present flowers and everything will be understood. Besides that they have other interesting features because their blossom is the main ingredient of all perfumes. They can cast a spell with their charming smell. <br>
                                We are proud to present our wonderful goods. Here you can find many wonderful examples because our collection is one of the biggest among flower stores. We know how to satisfy our clients because we have one similar passion – flowers.
                            </div>
                            <div class="tab-pane fade" id="chi_tiet" role="tabpanel" aria-labelledby="chi_tiet-tab"> 1234567890 </div>
                            <div class="tab-pane fade" id="nhan_xet" role="tabpanel" aria-labelledby="nhan_xet-tab"> Chưa có đánh giá </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h3 class="text-danger myfont">Sản phẩm liên quan</h3>
            </div>
        </div>
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/localization/messages_vi.min.js"></script>
    <!-- test  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#anh_nho a').fancybox();
            $('#anh_dai_dien a').fancybox();
        });
    </script>
</body>

</html>