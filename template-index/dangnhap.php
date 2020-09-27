<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end | Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid my-background">
        <form action="" method="post" name="frmDangNhap" id="frmDangNhap">
            <div class="card-group">
                <div class="card" id="img-dangnhap">
                    <div class="card-img">
                        <img src="../imgs/dangnhapcut.jpg" height="100px" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">
                            Đăng nhập
                        </h1>
                        <div class="form-group">
                            <label for="ten_dang_nhap">Tên đăng nhập : </label>
                            <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="mat_khau">Mật khẩu : </label>
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <button name="btn_dang_nhap" id="btn_dang_nhap" class="btn btn-success">Đăng nhập</button>
                        </div>
                        <h5 class="text-center">Hoặc</h5>
                        <div class="form-group text-center">
                            <button name="btn_dang_nhap" id="btn_dang_nhap" class="btn btn-outline-primary mb-2 w-100 my-btn-cir">
                                <h5>Đăng nhập</h5>
                            </button>
                            <button name="btn_dang_nhap" id="btn_dang_nhap" class="btn btn-outline-danger mb-2 w-100 my-btn-cir">
                                <h5>Google</h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['btn_dang_nhap'])) {
            
        }
        ?>
        <div id="aler" class="alert alert-warning alert-dismissible fade show my-alert" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/localization/messages_vi.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#frmDangNhap').validate({
                rules: {
                    ten_dang_nhap: {
                        required: true,
                        minlength: 3,
                        maxlength: 50,
                    },
                    mat_khau: {
                        required: true,
                    },
                },
                messages: {
                    ten_dang_nhap: {
                        required: "Nhập tên đăng nhập",
                        minlenght: "Tên đăng nhập phải có ít nhất 3 ký tự",
                        maxlenght: "Tên đăng nhập chỉ có tối đa 50 ký tự",
                    },
                    mat_khau: {
                        required: "Nhập mật khẩu",
                    },
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                success: function(label, element) {},
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }
            });
        });
    </script>
</body>

</html>