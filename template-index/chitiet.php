<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/font-awesome/css/font-awesome.min.css">
    <style>
        img {
            background: #f0f0f0;
        }
        #btn-add {
            border-radius: 0 !important;
            border-bottom: 1px solid red;
            transition: 1s border-bottom;
            font-size: large;
            padding: 0;
        }
        #btn-add:hover {
            border-bottom: none;
        }

    </style>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-2">
                <div class="row row-cols-1">
                    <div class="col my-1">
                        <img src="/templatedoan/imgs/Solar-Sunflower1-144x154.png" alt="1" class="img-fluid">
                    </div>
                    <div class="col my-1">
                        <img src="/templatedoan/imgs/Solar-Sunflower2-144x154.png" alt="1" class="img-fluid">
                    </div>
                    <div class="col my-1">
                        <img src="/templatedoan/imgs/Solar-Sunflower3-144x154.png" alt="1" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <img src="/templatedoan/imgs/Solar-Sunflower1-800x857.png" alt="" class="img-fluid">
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
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/localization/messages_vi.min.js"></script>

</body>

</html>