<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-end | Đăng ký</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/templateDoAn/vendor/font-awesome/css/font-awesome.min.css">
    <style>
        h1 {
            background: url('../imgs/dangky1.png');
            background-size: cover;
            color: white;
            text-shadow: black 1px 1px 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Phần header  -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 shadow-lg my-md-5 my-sm-0 px-0" style="border-radius: 5px;">
                <h1 class="myfont text-center py-5" style="border-radius: 5px 5px 0 0;">Đăng ký tài khoản</h1>
                <form action="" method="post" id="frm_dang_ky" name="frm_dang_ky" class="px-md-5 px-sm-0">
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần thông tin cơ bản</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="ten">Họ và tên: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" name="ten" id="ten" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                        <div class="form-group">
                            <label for="ngaysinh">Ngày sinh: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="date" id="ngaysinh" name="ngaysinh" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Giới tính: <span class="text-danger font-weight-bold">*</span></legend>
                                <div class="col-ms-10">
                                    <div class="form-check">
                                        <input type="radio" name="gioitinh" id="gioitinh_nam" class="form-check-input" value="1" checked>
                                        <label for="gioitinh_nam" class="form-check-label">Nam</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gioitinh" id="gioitinh_nu" class="form-check-input" value="0">
                                        <label for="gioitinh_nu" class="form-check-label">Nữ</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </fieldset>
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần thông tin liên hệ</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email: </label>
                            <input type="mail" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dienthoai">Số điện thoại: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="tel" name="dienthoai" id="dienthoai" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                        <div class="form-group">
                            <label for="diachi">Địa chỉ: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" name="diachi" id="diachi" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-md-5 mt-sm-0">
                        <legend class="myfont mb-0">Phần tài khoản</legend>
                        <hr class="mt-0">
                        <div class="form-group">
                            <label for="tendangnhap">Tên đăng nhập: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="text" name="tendangnhap" id="tendangnhap" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                        <div class="form-group">
                            <label for="matkhau">Mật khẩu: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="password" name="matkhau" id="matkhau" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                        <div class="form-group">
                            <label for="nhaplaimatkhau">Nhập lại mật khẩu: <span class="text-danger font-weight-bold">*</span></label>
                            <input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" class="form-control">
                            <div class="valid-feedback"> Đã nhập.</div>
                        </div>
                    </fieldset>
                    <div class="form-group text-center">
                        <button class="btn btn-outline-success">Đăng ký</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-danger">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_dangky'])) {
                    $errors = [];
                    $ten = $_POST['ten'];
                    $ngaysinh = $_POST['ngaysinh'];
                    $gioitinh = $_POST['gioitinh'];
                    $email = empty($_POST['email']) ? 'NULL' : $_POST['email'];
                    $dienthoai = $_POST['dienthoai'];
                    $diachi = $_POST['diachi'];
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $nhaplaimatkhau = $_POST['nhaplaimatkhau'];
                    if (empty($ten)) {
                        $errors['ten'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $ten,
                            'mes' => 'Họ và tên không được bỏ trống',
                        );
                    }
                    if (empty($ngaysinh)) {
                        $errors['ngaysinh'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $ngaysinh,
                            'mes' => 'Ngày sinh không được bỏ trống',
                        );
                    }
                    if (empty($dienthoai)) {
                        $errors['dienthoai'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $dienthoai,
                            'mes' => 'Số điện thoại không được bỏ trống',
                        );
                    }
                    if (empty($diachi)) {
                        $errors['diachi'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $diachi,
                            'mes' => 'Địa chỉ không được bỏ trống',
                        );
                    }
                    if (empty($tendangnhap)) {
                        $errors['tendangnhap'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $tendangnhap,
                            'mes' => 'Tên đăng nhập không được bỏ trống',
                        );
                    }
                    if (empty($matkhau)) {
                        $errors['matkhau'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $matkhau,
                            'mes' => 'Mật khẩu không được bỏ trống',
                        );
                    }
                    if (empty($nhaplaimatkhau)) {
                        $errors['nhaplaimatkhau'][] = array(
                            'rule' => 'required',
                            'rule_value' => true,
                            'value' => $nhaplaimatkhau,
                            'mes' => 'Nhập lại mật khẩu không được bỏ trống',
                        );
                    } else {
                        if ($nhaplaimatkhau != $matkhau) {
                            $errors['nhaplaimatkhau'][] = array(
                                'rule' => 'equalTo',
                                'rule_value' => $matkhau,
                                'value' => $nhaplaimatkhau,
                                'mes' => 'Mật khẩu không khớp',
                            );
                        }
                    }
                }
                ?>
                <h1 class="py-5 m-0" style="border-radius: 0 0 5px 5px;"></h1>
            </div>
            <?php if (isset($_POST['btn_dangky']) && isset($errors) && count($errors) > 0) : ?>
                <div id="aler" class="alert alert-warning alert-dismissible fade show my-alert" role="alert">
                    <?php foreach ($errors as $fields) : ?>
                        <?php foreach ($fields as $mes) : ?>
                            <strong>Lỗi</strong>: <?= $mes['mes'] ?><br>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Phần footer  -->
    </div>
    <script src="/templateDoAn/vendor/jquery/jquery.js"></script>
    <script src="/templateDoAn/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/templateDoAn/vendor/jquery-validation/localization/messages_vi.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#frm_dang_ky').validate({
                rules: {
                    ten: {
                        required: true
                    },
                    ngaysinh: {
                        required: true,
                    },
                    gioitinh: {
                        required: true,
                    },
                    dienthoai: {
                        required: true,
                    },
                    diachi: {
                        required: true,
                    },
                    tendangnhap: {
                        required: true,
                    },
                    matkhau: {
                        required: true,
                    },
                    nhaplaimatkhau: {
                        required: true,
                        equalTo: "#matkhau"
                    },
                },
                messages: {
                    nhaplaimatkhau: {
                        equalTo: 'Mật khẩu không khớp'
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