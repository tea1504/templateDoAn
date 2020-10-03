<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end | Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid my-background">
        <form action="" method="post" name="frmDangNhap" id="frmDangNhap">
            <div class="card-group">
                <div class="card" id="img-dangnhap">
                    <div class="card-img">
                        <img src="../imgs/dangnhapcut.jpg" height="100%" width="100%" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center myfont">
                            Đăng nhập
                        </h1>
                        <div class="form-group">
                            <input type="text" name="ten_dang_nhap" id="ten_dang_nhap" class="form-control hoa-form-control" placeholder="Tên đăng nhập..." />
                            <div class="valid-feedback">
                                Đã nhập.
                            </div>
                        </div>
                        <div class="form-group" style="position: relative;">
                            <input type="password" name="mat_khau" id="mat_khau" class="form-control hoa-form-control" placeholder="Mật khẩu..." />
                            <div class="valid-feedback">
                                Đã nhập.
                            </div>
                            <div class="show-password" id="show-password">
                                <i class="fa fa-eye-slash hide" aria-hidden="true"></i>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button name="btn_dang_nhap" id="btn_dang_nhap" class="btn btn-success w-100 my-btn-cir">Đăng nhập</button>
                        </div>
                        <h5 class="text-center myfont">hoặc</h5>
                        <div class="form-group text-center">
                            <button name="btn_facebook" id="btn_facebook" class="btn btn-outline-primary mb-2 w-100 my-btn-cir font-weight-bold">
                                Facebook
                            </button>
                            <button name="btn_google" id="btn_google" class="btn btn-outline-danger mb-2 w-100 my-btn-cir font-weight-bold">
                                Google
                            </button>
                        </div>
                        <hr>
                        <div class="text-center">
                            <a href="#" class="small">Quên mật khẩu?</a>
                        </div>
                        <div class="text-center">
                            <a href="/templatedoan/template-index/dangky.php" class="small">Đăng ký tài khoản</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['btn_dang_nhap'])) {
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $erorrs = [];
            if (empty($ten_dang_nhap)) {
                $erorrs['ten_dang_nhap'][] = [
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $ten_dang_nhap,
                    'mes' => 'Tên đăng nhập không được bỏ trống',
                ];
            } else {
                if (strlen($ten_dang_nhap) < 3) {
                    $erorrs['ten_dang_nhap'][] = [
                        'rule' => 'minlength',
                        'rule_value' => 3,
                        'value' => $ten_dang_nhap,
                        'mes' => 'Tên đăng quá ngắn, phải có ít nhất 3 ký tự',
                    ];
                }
                if (strlen($ten_dang_nhap) > 50) {
                    $erorrs['ten_dang_nhap'][] = [
                        'rule' => 'maxlength',
                        'rule_value' => 3,
                        'value' => $ten_dang_nhap,
                        'mes' => 'Tên đăng nhập quá dài, chỉ được tối đa 50 ký tự',
                    ];
                }
            }
            if (empty($mat_khau)) {
                $erorrs['mat_khau'][] = [
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $mat_khau,
                    'mes' => 'Mật khẩu không được bỏ trống',
                ];
            }
        }
        ?>
        <?php if (isset($_POST['btn_dang_nhap']) && isset($erorrs) && count($erorrs) > 0) : ?>
            <div id="aler" class="alert alert-warning alert-dismissible fade show my-alert" role="alert">
                <?php foreach ($erorrs as $fields) : ?>
                    <?php foreach ($fields as $mes) : ?>
                        <strong>Lỗi</strong>: <?= $mes['mes'] ?><br>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php
        if (isset($_POST['btn_dang_nhap']) && (!isset($erorrs) || count($erorrs) == 0)) {
            if ($ten_dang_nhap == 'admin' && $mat_khau == '123') {
                header('Location: index.php');
            } else {
        ?>
                <div id="aler" class="alert alert-danger alert-dismissible fade show my-alert" role="alert">
                    <strong>Đăng nhập thất bại</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        <?php
            }
        }
        ?>
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
            $('#show-password').click(function() {
                var pass = document.getElementById('mat_khau').type;
                if (pass == 'password') {
                    $('#show-password .fa-eye-slash').removeClass('hide');
                    $('#show-password .fa-eye').addClass('hide');
                    document.getElementById('mat_khau').setAttribute('type', 'text');
                } else {
                    $('#show-password .fa-eye').removeClass('hide');
                    $('#show-password .fa-eye-slash').addClass('hide');
                    document.getElementById('mat_khau').setAttribute('type', 'password');
                }
            });
        });
    </script>
</body>

</html>